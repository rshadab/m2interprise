<?php


namespace Interprise\Logger\Controller\Adminhtml\CronMaster;

class Delete extends \Interprise\Logger\Controller\Adminhtml\CronMaster
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
        $id = $this->getRequest()->getParam('cronmaster_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create('Interprise\Logger\Model\CronMaster');
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Cronmaster.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['cronmaster_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Cronmaster to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}
