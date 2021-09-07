<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListAppsResponseBody\result;

use AlibabaCloud\Tea\Model;

class appInfoList extends Model
{
    /**
     * @description 应用唯一标识符
     *
     * @var string
     */
    public $appId;

    /**
     * @description 应用名称
     *
     * @var string
     */
    public $appName;

    /**
     * @description 模板唯一标识
     *
     * @var string
     */
    public $appTemplateId;

    /**
     * @description 模板名称
     *
     * @var string
     */
    public $appTemplateName;

    /**
     * @description 应用Key
     *
     * @var string
     */
    public $appKey;

    /**
     * @description 应用状态
     *
     * @var string
     */
    public $appStatus;

    /**
     * @description 应用配置状态
     *
     * @var string
     */
    public $appConfigStatus;

    /**
     * @description 应用创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 集成方式：- 一体化SDK：paasSDK - 样板间：standardRoom
     *
     * @var string
     */
    public $integrationMode;

    /**
     * @description 样板间信息
     *
     * @var string
     */
    public $standardRoomInfo;

    /**
     * @description 应用组件列表
     *
     * @var string[]
     */
    public $componentList;
    protected $_name = [
        'appId'            => 'AppId',
        'appName'          => 'AppName',
        'appTemplateId'    => 'AppTemplateId',
        'appTemplateName'  => 'AppTemplateName',
        'appKey'           => 'AppKey',
        'appStatus'        => 'AppStatus',
        'appConfigStatus'  => 'AppConfigStatus',
        'createTime'       => 'CreateTime',
        'integrationMode'  => 'IntegrationMode',
        'standardRoomInfo' => 'StandardRoomInfo',
        'componentList'    => 'ComponentList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appTemplateId) {
            $res['AppTemplateId'] = $this->appTemplateId;
        }
        if (null !== $this->appTemplateName) {
            $res['AppTemplateName'] = $this->appTemplateName;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appStatus) {
            $res['AppStatus'] = $this->appStatus;
        }
        if (null !== $this->appConfigStatus) {
            $res['AppConfigStatus'] = $this->appConfigStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->integrationMode) {
            $res['IntegrationMode'] = $this->integrationMode;
        }
        if (null !== $this->standardRoomInfo) {
            $res['StandardRoomInfo'] = $this->standardRoomInfo;
        }
        if (null !== $this->componentList) {
            $res['ComponentList'] = $this->componentList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppTemplateId'])) {
            $model->appTemplateId = $map['AppTemplateId'];
        }
        if (isset($map['AppTemplateName'])) {
            $model->appTemplateName = $map['AppTemplateName'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppStatus'])) {
            $model->appStatus = $map['AppStatus'];
        }
        if (isset($map['AppConfigStatus'])) {
            $model->appConfigStatus = $map['AppConfigStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IntegrationMode'])) {
            $model->integrationMode = $map['IntegrationMode'];
        }
        if (isset($map['StandardRoomInfo'])) {
            $model->standardRoomInfo = $map['StandardRoomInfo'];
        }
        if (isset($map['ComponentList'])) {
            if (!empty($map['ComponentList'])) {
                $model->componentList = $map['ComponentList'];
            }
        }

        return $model;
    }
}
