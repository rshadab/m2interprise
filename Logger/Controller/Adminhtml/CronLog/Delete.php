<?php


namespace Interprise\Logger\Controller\Adminhtml\CronLog;

class Delete extends \Interprise\Logger\Controller\Adminhtml\CronLog
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
        $id = $this->getRequest()->getParam('cronlog_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create('Interprise\Logger\Model\CronLog');
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Cronlog.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['cronlog_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Cronlog to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}
