<?php

namespace App\Models\Merchant;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
	protected $table = "orders";//������
	
	/**
     * ��ģ���Ƿ��Զ�ά��ʱ���
     *
     * @var bool
     */
	public $timestamps = false;
	
	/**
     * ģ�͵������ֶα����ʽ��
     *
     * @var string
     */
    protected $dateFormat = 'U';
}