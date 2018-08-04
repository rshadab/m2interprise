<?php


namespace Interprise\Logger\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $installer = $setup;
        $installer->startSetup();

        $table_interprise_logger_cronmaster = $setup->getConnection()->newTable($setup->getTable('interprise_logger_cronmaster'));

        
        $table_interprise_logger_cronmaster->addColumn(
            'cronmaster_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
        $table_interprise_logger_cronmaster->addColumn(
            'cron_name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => False],
            'cron_name'
        );
        

        
        $table_interprise_logger_cronmaster->addColumn(
            'cron_action',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'cron_action'
        );
        

        
        $table_interprise_logger_cronmaster->addColumn(
            'cron_function',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'cron_function'
        );
        

        
        $table_interprise_logger_cronmaster->addColumn(
            'cron_changelog_endpoint',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'cron_changelog_endpoint'
        );
        

        
        $table_interprise_logger_cronmaster->addColumn(
            'cron_frequency',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [],
            'in seconds'
        );
        

        
        $table_interprise_logger_cronmaster->addColumn(
            'cron_status',
            \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
            null,
            [],
            'cron_status'
        );
        

        
        $table_interprise_logger_cronmaster->addColumn(
            'cron_active',
            \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
            null,
            [],
            'cron_active'
        );
        

        
        $table_interprise_logger_cronmaster->addColumn(
            'cron_from_date',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            null,
            [],
            'from this point cron will run'
        );
        

        $table_interprise_logger_cronlog = $setup->getConnection()->newTable($setup->getTable('interprise_logger_cronlog'));

        
        $table_interprise_logger_cronlog->addColumn(
            'cronlog_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
        $table_interprise_logger_cronlog->addColumn(
            'CronMasterId',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [],
            'CronMasterId'
        );
        

        
        $table_interprise_logger_cronlog->addColumn(
            'RunTime',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            null,
            [],
            'RunTime'
        );
        

        
        $table_interprise_logger_cronlog->addColumn(
            'Request',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Request'
        );
        

        
        $table_interprise_logger_cronlog->addColumn(
            'Response',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Response'
        );
        

        
        $table_interprise_logger_cronlog->addColumn(
            'Status',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Status'
        );
        

        
        $table_interprise_logger_cronlog->addColumn(
            'Remarks',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'Remarks'
        );
        

        
        $table_interprise_logger_cronlog->addColumn(
            'ActivityCount',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [],
            'ActivityCount'
        );
        

        $table_interprise_logger_cronactivityschedule = $setup->getConnection()->newTable($setup->getTable('interprise_logger_cronactivityschedule'));

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'cronactivityschedule_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'CronLogId',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [],
            'CronLogId'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'CronMasterId',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [],
            'CronMasterId'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'ActionType',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'ActionType'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'DataId',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'DataId'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'JsonData',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'JsonData'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'Status',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Status'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'ActivityTime',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            [],
            'ActivityTime'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'Remarks',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'Remarks'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'Request',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'Request'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'Response',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'Response'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'UpdateDate',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            [],
            'UpdateDate'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'IsActive',
            \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
            null,
            [],
            'IsActive'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'ItemStatus',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'ItemStatus'
        );
        

        
        $table_interprise_logger_cronactivityschedule->addColumn(
            'site_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [],
            'site_id'
        );
        $table_interprise_logger_cronactivityschedule->addColumn(
            'priority',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [],
            'priority'
        );
        

        $table_interprise_logger_changelog = $setup->getConnection()->newTable($setup->getTable('interprise_logger_changelog'));

        
        $table_interprise_logger_changelog->addColumn(
            'changelog_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
        $table_interprise_logger_changelog->addColumn(
            'CreatedAt',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            [],
            'CreatedAt'
        );
        

        
        $table_interprise_logger_changelog->addColumn(
            'ItemType',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'ItemType'
        );
        

        
        $table_interprise_logger_changelog->addColumn(
            'ItemId',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'ItemId'
        );
        

        
        $table_interprise_logger_changelog->addColumn(
            'Action',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Action'
        );
        

        
        $table_interprise_logger_changelog->addColumn(
            'PushedStatus',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            [],
            'PushedStatus'
        );
        

        
        $table_interprise_logger_changelog->addColumn(
            'JsonValue',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'JsonValue'
        );
        

        $setup->getConnection()->createTable($table_interprise_logger_changelog);

        $setup->getConnection()->createTable($table_interprise_logger_cronactivityschedule);

        $setup->getConnection()->createTable($table_interprise_logger_cronlog);

        $setup->getConnection()->createTable($table_interprise_logger_cronmaster);

        $setup->endSetup();
    }
}
