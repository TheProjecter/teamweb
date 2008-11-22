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
     * @param array $comment
     *
     * @return boolean
     */
    function savePost($comment) {
        if (isset($comment['post_id']) && (int)$comment['post_id'] == 0) {
            unset($comment['post_id']);
        }

        return $this->_tbPosts->save($comment);
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
