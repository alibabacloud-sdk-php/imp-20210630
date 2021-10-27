<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class AttachStandardRoomHttpsCertificateRequest extends Model
{
    /**
     * @description 应用唯一标识
     *
     * @var string
     */
    public $appId;

    /**
     * @description NGINX格式证书私钥
     *
     * @var string
     */
    public $certificatePrivateKey;

    /**
     * @description NGINX格式证书公钥
     *
     * @var string
     */
    public $certificatePublicKey;

    /**
     * @description 使用证书的确切域名
     *
     * @var string
     */
    public $domainName;
    protected $_name = [
        'appId'                 => 'AppId',
        'certificatePrivateKey' => 'CertificatePrivateKey',
        'certificatePublicKey'  => 'CertificatePublicKey',
        'domainName'            => 'DomainName',
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
        if (null !== $this->certificatePrivateKey) {
            $res['CertificatePrivateKey'] = $this->certificatePrivateKey;
        }
        if (null !== $this->certificatePublicKey) {
            $res['CertificatePublicKey'] = $this->certificatePublicKey;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachStandardRoomHttpsCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CertificatePrivateKey'])) {
            $model->certificatePrivateKey = $map['CertificatePrivateKey'];
        }
        if (isset($map['CertificatePublicKey'])) {
            $model->certificatePublicKey = $map['CertificatePublicKey'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
