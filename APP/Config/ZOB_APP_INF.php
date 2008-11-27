<?php

/**
 * ����Ӧ�ó�������
 *
 * @package OfficeBoard
 * @subpackage Controller
 * @author  Zhou Yuhui (xuchangyuhui@sohu.com)
 * @version 1.0, 2008-09-19
 */

return array(
    /**
     * Ӧ�ó������
     */
    'appTitle' => 'JobFriends',

    /**
     * ָ��Ĭ�Ͽ�����
     */
    'defaultController' => 'ZobHome',

    /**
     * ָ��Ҫʹ�õĵ�����
     */
    'dispatcher' => 'FLEA_Dispatcher_Auth',

    /**
     * ָʾ RBAC �����ʲô������ session �б����û�����
     */
    'RBACSessionKey' => 'zyh.jf',

    /**
     * ָ����Ӧ�ó���ʹ�õ����ݱ��ǰ׺
     */
    'dbTablePrefix' => '',

    /**
     * ���ö�����֧��
     */
    'multiLanguageSupport' => true,

    /**
     * ָ�������ļ�����Ŀ¼
     */
    'languageFilesDir' => realpath(dirname(__FILE__) . '/../Languages'),

    /**
     * ָʾ���õ�����
     */
    'languages' => array(
        'Chinese' => 'chinese-utf8',
        'English' => 'english-usa',
    ),

    /**
     * ָʾĬ������
     */
    'defaultLanguage' => 'chinese-utf8',

    /**
     * �ϴ�Ŀ¼�� URL ����·��
     */
    'uploadDir' => UPLOAD_DIR,
    'uploadRoot' => UPLOAD_ROOT,

    /**
     * ����ͼ�Ĵ�С��������չ��
     */
    'thumbWidth' => 110,
    'thumbHeight' => 110,
    'imageFileExts' => 'gif,png,jpg,jpeg',
    
     /**
     * ��Ƭ�Ĵ�С��������չ��
     */
    'photoWidth' => 768,
    'photoHeight' => 1024,

    /**
     * ��Ʒ��ͼƬ������ļ��ߴ�Ϳ�����չ��
     */
    'photoMaxFilesize' => 1000 * 1024,
    'photoFileExts' => 'gif,png,jpg,jpeg',

    /**
     * ʹ��Ĭ�ϵĿ����� ACT �ļ�
     *
     * �������Ա���Ϊÿһ������������д ACT �ļ�
     */
    'defaultControllerACTFile' => dirname(__FILE__) . DS . 'DefaultACT.php',

    /**
     * �������ø�ѡ��Ϊ true����������Ĭ�ϵĿ����� ACT �ļ�
     */
    'autoQueryDefaultACTFile' => true,
	'internalCacheDir' => SHARED_DIR . DS . '_Cache',
);
?>