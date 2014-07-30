<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
          new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
          new Symfony\Bundle\SecurityBundle\SecurityBundle(),
          new Symfony\Bundle\TwigBundle\TwigBundle(),
          new Symfony\Bundle\MonologBundle\MonologBundle(),
          new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
          new Symfony\Bundle\AsseticBundle\AsseticBundle(),
          new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
          new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            //Custom bundles
          new Bash\BashBundle\BashBashBundle(),
          new Bash\UserBundle\BashUserBundle(),
          new Bash\NodesBundle\BashNodesBundle(),
            //FOSUser Bundle
          new FOS\UserBundle\FOSUserBundle(),
          //Sonata
          new Sonata\CoreBundle\SonataCoreBundle(),
          new Sonata\BlockBundle\SonataBlockBundle(),
          new Sonata\jQueryBundle\SonatajQueryBundle(),
          new Knp\Bundle\MenuBundle\KnpMenuBundle(),
          new Sonata\MediaBundle\SonataMediaBundle(),
          new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
          new Sonata\AdminBundle\SonataAdminBundle(),
          new Genemu\Bundle\FormBundle\GenemuFormBundle(),
          new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),

          //Google
          //new BIT\GoogleBundle\BITGoogleBundle(),
          new Stfalcon\Bundle\TinymceBundle\StfalconTinymceBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config_' . $this->getEnvironment() . '.yml');
    }
}
