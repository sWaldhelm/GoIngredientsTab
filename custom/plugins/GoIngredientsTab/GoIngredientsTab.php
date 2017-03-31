<?php 
namespace GoIngredientsTab;

use Doctrine\ORM\Tools\SchemaTool;
use GoIngredientsTab\Models\GoIngredients;
use GoIngredientsTab\Models\GoArticlesIngredients;
use Shopware\Components\Model\ModelManager;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;

class GoIngredientsTab extends \Shopware\Components\Plugin
{
    public function install(InstallContext $context)
    {
        $this->updateSchema();
    }

    public function uninstall(UninstallContext $context)
    {
        $entityManager = $this->container->get('models');

        $tool = new SchemaTool($entityManager);

        $classMetaData = [
            $entityManager->getClassMetadata(GoIngredients::class),
            $entityManager->getClassMetadata(GoArticlesIngredients::class),
        ];

        $tool->dropSchema($classMetaData);
    }

    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatcSecure_Frontend_Detail' => 'onPostDispatchDetail',
            'Enlight_Controller_Dispatcher_ControllerPath_Backend_GoIngredients' => 'onGetControllerPathBackend',
            'Enlight_Controller_Action_PostDispatchSecure_Backend_Article' => 'onPostDispatchBackendArticle'
        ];
    }

    public function onPostDispatchDetail(\Enlight_Event_EventArgs $args)
    {
        $detailController = $args->getSubject();
        $view = $detailController->View();

        $this->registerTemplateDir();
        $view->assign();
    }

    public function onGetControllerPathBackend()
    {
        $this->registerTemplateDir();
        return $this->getPath(). '/Controllers/Backend/GoIngredients.php';
    }

    public function onPostDispatchBackendArticle(\Enlight_Event_EventArgs $args)
    {
        $controller = $args->getSubject();
        $request = $controller->Request();
        $view = $controller->View();

        $view->addTemplateDir(__DIR__ . '/Resources/views/');

        if ($request->getActionName() == 'index'){
            $view->extendsTemplate('backend/article_extension/app.js');
        }
        if ($request->getActionName() == 'load') {
            $view->extendsTemplate('backend/article_extension/view/detail/window.js');
        }

    }

    private function registerTemplateDir()
    {
        $this->container->get('Template')->addTemplateDir(
          $this->getPath() . '/Resources/views/'
        );
    }

    private function updateSchema()
    {
        $entityManager = $this->container->get('models');

        $tool = new SchemaTool($entityManager);

        $classMetaData = [
            $entityManager->getClassMetadata(GoIngredients::class),
            $entityManager->getClassMetadata(GoArticlesIngredients::class),
        ];
        $tool->createSchema($classMetaData);
    }
}
?>