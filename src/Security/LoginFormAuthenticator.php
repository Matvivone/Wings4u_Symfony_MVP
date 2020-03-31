<?php

namespace App\Security;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Routing\RouterInterface;

class LoginFormAuthenticator extends AbstractFormLoginAuthenticator
{
    private $userRepository;
    private $router;

    public function __construct(UserRepository $userRepository, RouterInterface $router)
    {
        $this->userRepository = $userRepository;
        $this->router = $router;
    }


    public function supports(Request $request)
    {
        // do your work when we're POSTing to the login page
        //If we return true from supports() Symfony will immediately call getCredentials():
        return $request->attributes->get('_route') === 'app_login' && $request->isMethod('POST');

    }
    public function getCredentials(Request $request)
    {
        return [
            'email' => $request->request->get('email'),
            'password' => $request->request->get('password'),
        ];
    }
    public function getUser($credentials, UserProviderInterface $userProvider)
    {

        return $this->userRepository->findOneBy(['email' => $credentials['email']]);

    }
    public function checkCredentials($credentials, UserInterface $user)
    {

        $password = $credentials['password'];
        if ($password == $user->getPassword()) {
            return true;
        }
        return false;

    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        return new RedirectResponse($this->router->generate('app_home_content', [
            'pageName' => 'home']));

    }



    protected function getLoginUrl()
    {
        return $this->router->generate('app_login');
    }

}
