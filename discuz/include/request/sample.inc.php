<?php

/*
 * [Discuz!] (C)2001-2009 Comsenz Inc.
 * This is NOT a freeware, use is subject to license terms
 *
 * $Id: sample.inc.php 21053 2009-11-09 10:29:02Z wangjinbo $
 */
if (! defined('IN_DISCUZ')) {
    exit('Access Denied');
}

if ($requestrun) {
    
    $settings['fid'] = ! empty($settings['sidestatus']) && $specialfid ? $specialfid : $settings['fid'];
    $limit = ! empty($settings['limit']) ? intval($settings['limit']) : 10;
    $fid = ! empty($settings['fid']) ? 'fid=' . intval($settings['fid']) : 'fid>0';
    
    $query = $db->query("SELECT tid, subject FROM {$tablepre}threads WHERE $fid AND displayorder>=0 ORDER BY dateline DESC LIMIT $limit");
    
    $writedata = '<ul>';
    while ($thread = $db->fetch_array($query)) {
        $writedata .= "
			<li>
			<a href=\"{$boardurl}viewthread.php?tid=$thread[tid]\" target=\"_blank\">$thread[subject]</a>
			</li>
		";
    }
    $writedata .= '</ul>';
} else {
    
    $request_version = '1.0';
    $request_name = 'ģ����ýű�����';
    $request_description = '����������÷����������Բ��ձ��ű� ./include/request/sample.inc.php �е�˵����дģ��ű�';
    $request_copyright = '<a href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a>';
    $request_settings = array(
        'limit' => array(
            '������Ŀ��',
            '���÷��ص���Ŀ��',
            'text'
        ),
        'fid' => array(
            'ѡ����',
            'ѡ����ʾ�ĸ���������',
            'select',
            array()
        ),
        'sidestatus' => array(
            '�����б�ҳ��(forumdisplay.php)ר��',
            '���ô����ݵ���ģ��Ϊ�����б�ҳ��(forumdisplay.php)��ר��ģ�飬ֻ���õ�ǰ��������',
            'radio'
        )
    );
    
    include DISCUZ_ROOT . './forumdata/cache/cache_forums.php';
    $settings['fid'][3][] = array(
        0,
        ''
    );
    foreach ($_DCACHE['forums'] as $fid => $forum) {
        $settings['fid'][3][] = array(
            $fid,
            $forum['name']
        );
    }
}

?>