<?php


namespace Interprise\Logger\Controller\Adminhtml\CronActivitySchedule;

class Delete extends \Interprise\Logger\Controller\Adminhtml\CronActivitySchedule
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('cronactivityschedule_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create('Interprise\Logger\Model\CronActivitySchedule');
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Cronactivityschedule.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['cronactivityschedule_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Cronactivityschedule to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}
