<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class GetLiveDomainStatusShrinkRequest extends Model
{
    /**
     * @description 应用唯一标识
     *
     * @var string
     */
    public $appId;

    /**
     * @description 直播域名列表
     *
     * @var string
     */
    public $liveDomainListShrink;

    /**
     * @description 直播域名类型，推流域名: push, 拉流域名: pull, 回放域名: palyback
     *
     * @var string
     */
    public $liveDomainType;

    /**
     * @description 地域
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appId'                => 'AppId',
        'liveDomainListShrink' => 'LiveDomainList',
        'liveDomainType'       => 'LiveDomainType',
        'regionId'             => 'RegionId',
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
        if (null !== $this->liveDomainListShrink) {
            $res['LiveDomainList'] = $this->liveDomainListShrink;
        }
        if (null !== $this->liveDomainType) {
            $res['LiveDomainType'] = $this->liveDomainType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLiveDomainStatusShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['LiveDomainList'])) {
            $model->liveDomainListShrink = $map['LiveDomainList'];
        }
        if (isset($map['LiveDomainType'])) {
            $model->liveDomainType = $map['LiveDomainType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
