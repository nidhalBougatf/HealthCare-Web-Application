<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;


class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            new MyApp\UserBundle\MyAppUserBundle(),
            new Magsin\MagsinBundle\MagsinBundle(),
            new MyApp\ArticleBundle\MyAppArticleBundle(),

            new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
            new MyApp\EvaluationBundle\MyAppEvaluationBundle(),
            new CMEN\GoogleChartsBundle\CMENGoogleChartsBundle(),
            new Nomaya\SocialBundle\NomayaSocialBundle(),
            new \Bnbc\UploadBundle\BnbcUploadBundle(),
            new Knp\Bundle\SnappyBundle\KnpSnappyBundle(),
            new \RamiSaadani\ForumBundle\RamiSaadaniForumBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new \Pi\EspaceBundle\PiEspaceBundle(),
            new Vich\UploaderBundle\VichUploaderBundle(),
            new  MyApp\OffreBundle\MyAppOffreBundle() ,
            new  \EvenementBundle\EvenementBundle() ,
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();

            if ('dev' === $this->getEnvironment()) {
                $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
                $bundles[] = new Symfony\Bundle\WebServerBundle\WebServerBundle();
            }
        }

        return $bundles;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__) . '/var/cache/' . $this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__) . '/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir() . '/config/config_' . $this->getEnvironment() . '.yml');
    }

    public function getRootDir()
    {
        return __DIR__;
    }
}
