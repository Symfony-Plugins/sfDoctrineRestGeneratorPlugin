[?php

/**
 * <?php echo $this->getModuleName() ?> actions. REST API for the model "<?php echo $this->getModelClass() ?>"
 *
 * @package    ##PROJECT_NAME##
 * @subpackage <?php echo $this->getModuleName()."\n" ?>
 * @author     ##AUTHOR_NAME##
 *
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z xavier $
 */
class <?php echo $this->getGeneratedModuleName() ?>Actions extends <?php echo $this->getActionsBaseClass() ?>

{
  protected $model = '<?php echo $this->getModelClass() ?>';

<?php include dirname(__FILE__).'/../../parts/createAction.php' ?>

<?php include dirname(__FILE__).'/../../parts/createObject.php' ?>

<?php include dirname(__FILE__).'/../../parts/deleteAction.php' ?>

<?php include dirname(__FILE__).'/../../parts/doSave.php' ?>

<?php include dirname(__FILE__).'/../../parts/getCreateValidators.php' ?>

<?php include dirname(__FILE__).'/../../parts/getIndexValidators.php' ?>

<?php include dirname(__FILE__).'/../../parts/indexAction.php' ?>

<?php include dirname(__FILE__).'/../../parts/parsePayload.php' ?>

<?php include dirname(__FILE__).'/../../parts/query.php' ?>
<?php include dirname(__FILE__).'/../../parts/queryAdditionnal.php' ?>

<?php include dirname(__FILE__).'/../../parts/updateObjectFromRequest.php' ?>

<?php include dirname(__FILE__).'/../../parts/validateCreate.php' ?>

<?php include dirname(__FILE__).'/../../parts/validateIndex.php' ?>
}
