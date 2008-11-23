<?php

/**
 * Model_Posts �ṩ������Ϣ�Ĳ���
 *
 * @package TeamWeb
 * @subpackage Model
 * @author  Zhou Yuhui (xuchangyuhui@sohu.com)
 * @version 1.0, 2008-11-22
 */
class Model_Posts
{
    /**
     * �ṩ������Ϣ���ݿ���ʷ���Ķ���
     *
     * @var Table_Posts
     */
    var $_tbPosts;
    
    /**
     * ���캯��
     *
     * @return Model_Posts
     */
    function Model_Posts() {
        $this->_tbPosts =& FLEA::getSingleton('Table_Posts');
    }

    /**
     * ��ȡָ�� ID ��post��Ϣ
     *
     * @param int $postId
     *
     * @return array
     */
    function getPost($postId) {

        return $this->_tbPosts->find((int)$postId);
    }

    /**
     * ����������Ϣ
     *
     * @param array $post
     *
     * @return boolean
     */
    function savePost($post) {
        if (isset($post['post_id']) && (int)$post['post_id'] == 0) {
            unset($post['post_id']);
        }

        return $this->_tbPosts->save($post);
    }

    /**
     * ɾ��ָ����������Ϣ
     *
     * @param int $postId
     *
     * @return boolean
     */
    function removePost($postId) {
        $postId = (int)$postId;

        $post = $this->_tbPosts->find($postId);
        if (!$post) {
            FLEA::loadClass('Exception_DataNotFound');
            __THROW(new Exception_DataNotFound($postId));
            return false;
        }

        return $this->_tbPosts->removeByPkv($postId);
    }

    /**
     * ���� Table_Posts ����
     *
     * @return Table_Posts
     */
    function & getTable() {
        return $this->_tbPosts;
    }
}
