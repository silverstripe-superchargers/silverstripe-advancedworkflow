<?php
/**
 * Publishes an item
 *
 * @author     marcus@silverstripe.com.au
 * @license    BSD License (http://silverstripe.org/bsd-license/)
 * @package    activityworkflow
 * @subpackage actions
 */
class PublishItemWorkflowAction extends WorkflowAction {

	public static $icon = 'activityworkflow/images/publish.png';

	public function execute(WorkflowInstance $workflow) {
		$target = $workflow->getTarget();

		if ($target) {
			// publish it!
			$target->doPublish();
		}

		return true;
	}
}