<?php

/**
 * Model_Projects �ṩ��Ŀ��Ϣ�Ĳ���
 *
 * @package TeamWeb
 * @subpackage Model
 * @author  Zhou Yuhui (xuchangyuhui@sohu.com)
 * @version 1.0, 2008-11-22
 */
class Model_Projects
{
    /**
     * �ṩ��Ŀ��Ϣ���ݿ���ʷ���Ķ���
     *
     * @var Table_Projects
     */
    var $_tbProjects;
    
    /**
     * ���캯��
     *
     * @return Model_Projects
     */
    function Model_Projects() {
        $this->_tbProjects =& FLEA::getSingleton('Table_Projects');
    }

    /**
     * ��ȡָ�� ID ��project��Ϣ
     *
     * @param int $projectId
     *
     * @return array
     */
    function getProject($projectId) {

        return $this->_tbProjects->find((int)$projectId);
    }

    /**
     * ������Ŀ��Ϣ
     *
     * @param array $project
     *
     * @return boolean
     */
    function savePost($project) {
        if (isset($project['project_id']) && (int)$project['project_id'] == 0) {
            unset($project['project_id']);
        }

        return $this->_tbProjects->save($project);
    }

    /**
     * ɾ��ָ������Ŀ��Ϣ
     *
     * @param int $projectId
     *
     * @return boolean
     */
    function removePost($projectId) {
        $projectId = (int)$projectId;

        $project = $this->_tbProjects->find($projectId);
        if (!$project) {
            FLEA::loadClass('Exception_DataNotFound');
            __THROW(new Exception_DataNotFound($projectId));
            return false;
        }

        return $this->_tbProjects->removeByPkv($projectId);
    }

    /**
     * ���� Table_Projects ����
     *
     * @return Table_Projects
     */
    function & getTable() {
        return $this->_tbProjects;
    }
}
