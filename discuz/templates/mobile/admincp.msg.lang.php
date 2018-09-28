<?php

// Admins' CP Language Pack for Discuz! Version 1.0.0
// Translated by Crossday
$msglang = array(
    'undefined_action' => ' 未定义操作。',
    'noaccess' => '您没有权限访问管理中心。',
    'noaccess_isfounder' => '您没有权限访问该设置，出于安全考虑此设置只有论坛创始人可以使用，请检查论坛的 config.inc.php 文件内创始人的设置。',
    'noaccess_ip' => '对不起，管理员设定了只有特定 IP 地址范围才能访问管理中心，您的地址不在被允许的范围内。',
    'action_noaccess' => '对不起，管理员限制您无权使用本功能。',
    'action_noaccess_config' => '对不起，出于系统安全考虑，论坛管理员关闭了该功能，如需要打开请自行修改论坛的 config.inc.php 文件内对应的相关安全配置信息。',
    'action_access_noexists' => '论坛缺少安全设置，请对照标准程序的 config.inc.php 仔细修改您的配置文件。否则无法使用本功能。',
    'import_data_invalid' => '数据无法识别，请返回。',
    'import_data_typeinvalid' => '数据类型错误，请返回。',
    
    'settings_gzip_invalid' => '当前 PHP 版本不支持 Gzip 压缩，请返回修改。',
    'settings_maxonlines_invalid' => '指定的最大在线人数必须填写且不得超过 65535，请返回修改。',
    'settings_creditsformula_invalid' => '积分公式包含无效变量或运算符，请返回修改。',
    'settings_ipaccess_invalid' => '操作错误！您必须将自己的 IP 加入到允许访问论坛的 IP 列表中，请返回修改。',
    'settings_adminipaccess_invalid' => '操作错误！您必须将自己的 IP 加入到允许访问后台的 IP 列表中，请返回修改。',
    'settings_credits_title_invalid' => '您没有为全部被启用的积分设置积分名称，请返回修改。',
    'settings_creditstrans_invalid' => '交易积分必须是已经被启用的积分类型，请返回修改。',
    'settings_update_succeed' => '全局设置成功更新。',
    'settings_seccodewidthheight_invalid' => '验证码图片宽度或者高度超出限定的范围，请返回修改。',
    'settings_extcredits_must_available' => '您需要至少开启一种扩展积分，请返回修改。',
    
    'uc_database_connect_error' => '连接用户中心数据库服务器失败，请返回检查设置。',
    'uc_database_select_db_error' => '选择用户中心数据库失败，可能不存在该数据库，请返回检查设置。',
    'uc_config_write_error' => '配置文件写入失败，请返回检查设置。',
    
    'forums_add_category_succeed' => '添加新分类 <b>$newcat</b> 成功。',
    'forums_add_forum_succeed' => '添加新版块 <b>$newforum</b> 成功。',
    'forums_update_succeed' => '版块设置成功更新。',
    'forums_copy_source_invalid' => '您没有选择要复制的源版块，请返回修改。',
    'forums_copy_target_invalid' => '您没有选择要复制的目标版块，请返回修改。',
    'forums_copy_options_invalid' => '您没有选择要复制的项目，请返回修改。',
    'forums_copy_succeed' => '版块设置成功复制。',
    'forums_moderators_update_succeed' => '版主设置成功更新。',
    'forums_merge_source_sub_notnull' => '源版块下级版块不为空，请先返回修改相关下级版块的上级设置。',
    'forums_merge_succeed' => '版块合并成功。',
    'forums_edit_name_invalid' => '您没有输入分类名称，请返回修改。',
    'forums_edit_sub_notnull' => '下级版块不为空，不能修改本版块的上级版块归属，请返回。',
    'forums_edit_succeed' => '版块设置成功更新。',
    'forums_delete_sub_notnull' => '下级版块不为空，请先返回删除本分类或版块的下级论坛。',
    'forums_delete_confirm' => '本操作不可恢复，您确定要删除该版块，清除其中帖子和附件吗？<br />注意: 删除论坛并不会更新用户发帖数和积分',
    'forums_delete_succeed' => '版块成功删除。',
    'forums_nonexistence' => '指定的版块不存在，请返回修改',
    'forums_threadtypes_duplicate' => '新增主题分类与现有重复，请返回修改。',
    'forums_threadtypes_succeed' => '主题分类成功更新。',
    'forums_threadsorts_duplicate' => '不允许发表多种分类信息，请返回修改。',
    'forums_rules_nopermission' => '对不起，管理员设置了版主无法编辑版块规则。',
    'forums_rules_succeed' => '版块规则成功编辑。',
    'forums_noparent' => '对不起，您没有选择该版块的分类或者上级版块，请返回修改。',
    'forums_name_toolong' => '输入版块名称超过50个字符，请返回修改。',
    'forums_formulaperm_error' => '权限表达式无效，请返回修改。',
    'forums_delete_alarm' => '本操作不可恢复，正在删除版块数据... ...',
    'forums_edit_nonexistence' => '请先选择您要进行操作的版块：',
    'forums_edit_threadsort_nonexistence' => '没有选择默认的分类信息，请返回修改。',
    
    'announce_nonexistence' => '指定的公告不存在或无权编辑，请返回。',
    'announce_time_invalid' => '对不起，您没有输入起始时间或您输入的终止时间不正确，请返回修改。',
    'announce_invalid' => '您必须输入公告标题和内容，请返回修改。',
    'announce_succeed' => '论坛公告成功编辑。',
    'announce_update_succeed' => '论坛公告成功更新。',
    
    'modcp_ann_empty' => '您必须输入公告标题和内容，请返回修改。',
    'modcp_ann_urlerror' => '网址链接无效，请返回修改。',
    
    'admingroups_edit_succeed' => '管理组权限设置成功更新。',
    'admingroups_edit_nonexistence' => '请先选择您要进行操作的管理组：',
    
    'usergroups_update_credits_invalid' => '缺少积分下限为负数或 0 的会员用户组，请返回修改。',
    'usergroups_update_credits_duplicate' => '会员用户组积分下限设置重复，请返回修改。',
    'usergroups_update_succeed' => '用户组成功更新。如您添加了新的用户组，<br />请不要忘记修改其相应的权限设置。',
    'usergroups_edit_public_invalid' => '公众用户组不能关联管理组，否则将产生安全隐患，请返回修改。',
    'usergroups_edit_creditstrans_disabled' => '您需要先在 全局设置中启用交易积分才能设置收费公众用户组的相关功能，请返回修改。',
    'usergroups_edit_rate_invalid' => '用户组评分上下限或 24 小时最大评分数设置有误，请返回修改。',
    'usergroups_edit_succeed' => '用户组权限设置成功更新。',
    'usergroups_type_nonexistence' => '用户组类型错误，请返回',
    'usergroups_edit_nonexistence' => '请先选择您要进行操作的用户组：',
    'usergroups_edit_fail' => '您没有权限编辑拥有管理权限的用户组，请返回',
    
    'ranks_succeed' => '发帖数级别成功更新。',
    
    'members_add_toolong' => '对不起，您的用户名超过 15 个字符，请返回输入一个较短的用户名。',
    'members_add_tooshort' => '对不起，您输入的用户名小于3个字符, 请返回输入一个较长的用户名。',
    'members_add_illegal' => '用户名包含敏感字符或被系统屏蔽，请返回重新填写。',
    'members_username_protect' => '用户名包含被系统屏蔽的字符，请返回重新填写。',
    'members_add_invalid' => '您没有填写完整用户资料，请返回修改。',
    'members_add_username_duplicate' => '用户名已经存在，请返回修改。',
    'members_add_username_activation' => '用户名已经存在，但尚未激活，请返回修改。',
    'members_email_duplicate' => '该 Email 地址已经被注册，请返回重新填写。',
    'members_email_illegal' => 'Email 地址无效，请返回重新填写。',
    'members_email_domain_illegal' => 'Email 包含不可使用的邮箱域名，请返回重新填写。',
    'members_add_succeed' => '用户 $newusername(UID $uid) 添加成功。',
    'members_search_invalid' => '您没有提供搜索的条件，请返回修改。',
    'members_search_noresults' => '没有找到符合条件的会员。',
    'members_delete_confirm' => '本操作不可恢复，您确定要删除符合条件的 $membernum 个用户吗？',
    'members_delete_succeed' => '符合条件的 $numdeleted 个用户被成功删除。',
    'members_edit_nonexistence' => '指定用户不存在，请返回。',
    'members_edit_illegal' => '您不能编辑特殊用户，请返回。',
    'members_edit_reason_invalid' => '您没有输入执行此变更的理由，请返回修改。',
    'members_edit_duplicate' => '新用户名与现有用户重复，请返回修改。',
    'members_edit_succeed' => '用户资料成功更新。',
    'members_edit_groups_toomany' => '您设置了过多的扩展用户组，已超出系统允许的存储容量，请返回修改。',
    'members_edit_groups_illegal' => '过期用户组和用户当前所属用户组相同，请返回修改。',
    'members_edit_groups_succeed' => '用户的用户组属性编辑成功。',
    'members_edit_credits_succeed' => '用户积分成功编辑。',
    'members_edit_medals_nonexistence' => '目前没有可用的勋章，请到“勋章中心”启用勋章后再进行此操作。',
    'members_edit_medals_succeed' => '用户勋章成功编辑。',
    'members_newsletter_sm_invalid' => '您没有输入消息的标题或内容，请返回修改。',
    'members_newsletter_notify_succeed' => '论坛通知成功发送。',
    'members_reward_invalid' => '您没有对用户积分进行奖惩，请返回修改。',
    'members_reward_succeed' => '用户积分奖惩成功执行。',
    'members_reward_notify_succeed' => '用户积分奖惩成功执行，并已通知相关用户。',
    'members_confermedal_succeed' => '颁发勋章成功执行。',
    'members_confermedal_notify_succeed' => '颁发勋章成功执行，并已通知相关用户。',
    'members_merge_invalid' => '您没有输入要合并的用户名，或指定的用户不存在，请返回修改。',
    'members_merge_confirm' => '本操作不可恢复，您确定将 $sourcemember 及其发表、拥有的全部资料转移到 $targetmember 中并删除 $sourcemember 吗？',
    'members_merge_succeed' => '原用户 $sourcemember 已成功合并入新用户 $targetmember 中。',
    'members_sameness' => '对不起，原用户名不能与目标用户名相同，请返回修改。',
    'members_add_admin_none' => '对不起，出于安全性考虑，不允许直接添加管理员，请返回修改。',
    'members_add_ban_all_none' => '对不起，不允许添加禁止访问、禁止IP、游客用户组，请返回修改。',
    'members_no_find_deluser' => '对不起，没有搜索到需要删除的用户，请返回修改搜索条件或者重新选择要删除的用户。',
    'members_dont_contain_admin_merge' => '源用户中包含管理员身份会员，请首先将他的管理员身份解除后再进行合并操作，否则合并无法进行，请返回更改。',
    'members_super_edit_admin_allow' => '只有论坛创始人才能编辑修改管理员的资料，请返回。',
    'members_access_succeed' => '指定用户论坛权限成功更新。',
    'members_ipban_nopermission' => '只有管理员可以使用“*”通配符，请返回。',
    'members_ipban_illegal' => '操作错误！您自己的 IP 已经存在于禁止列表中，请返回修改。',
    'members_ipban_invalid' => '新的禁止 IP 已经存在于列表中，请返回。',
    'members_ipban_succeed' => 'IP 禁止列表成功更新。',
    'members_nonexistence' => '请先输入您要进行操作的用户名：',
    
    'moderate_members_succeed' => '审核操作成功，共 $numvalidated 个用户被通过，$numinvalidated 个用户被否决，$numdeleted 个用户被删除。',
    'moderate_threads_succeed' => '审核操作成功，共 $validates 个主题被通过，$ignores 个主题被忽略，$recycles 个主题被放入回收站，$deletes 个主题被删除。',
    'moderate_replies_succeed' => '审核操作成功，共 $validates 个回复被通过，$ignores 个回复被忽略，$deletes 个回复被删除。',
    'moderate_posts_no_access_all' => '您没有审核任何栏目帖子的权利，请返回。',
    'moderate_posts_no_access_this' => '您没有审核此栏目的权限，请返回。',
    'threads_move_invalid' => '您没有选择或选择的目标版块/分类不存在，请返回。',
    'threads_forumstick_del_succeed' => '置顶主题列表更新成功',
    'threads_forumstick_edit_succeed' => '目标版块更改成功',
    'threads_forumstick_add_succeed' => '主题添加成功',
    'threads_forumstick_targets_empty' => '请选择一个或多个目标版块',
    'threads_forumstick_url_invalid' => '您输入的URL无效',
    
    'recyclebin_succeed' => '回收站更新成功，共 $threadsdel 个主题被删除，$threadsundel 个主题被恢复。',
    'recyclebin_none_selected' => '没有选择要操作的帖子。',
    
    'google_succeed' => 'Google 搜索设置成功更新。',
    
    'qihoo_adminemail_invalid' => '您填写的站长联系 Email 格式不正确，请返回修改',
    'qihoo_succeed' => '奇虎搜索设置成功更新。',
    'qihoo_topics_succeed' => '专题设置成功更新。',
    
    'alipay_ratio_invalid' => '您输入的现金/积分兑换比率小于 0，请返回修改。',
    'alipay_account_invalid' => '您输入的收款支付宝账号格式不正确，请返回修改。',
    'alipay_securitycode_invalid' => '您输入的支付宝安全校验码格式不正确，请返回修改。',
    'alipay_succeed' => '支付宝功能成功设定。',
    'tenpay_bargainor_invalid' => '请输入 10 位数字的财付通商户号。',
    'tenpay_key_invalid' => '密钥只能用32位字母或数字组成，请返回修改。',
    'tenpay_succeed' => '财付通功能成功设定。',
    'ec_credit_succeed' => '信用评价体系成功设定。',
    
    'orders_disabled' => '您没有启用交易积分或支付宝积分充值功能，无法对订单进行管理。',
    'orders_validate_succeed' => '订单处理成功。',
    
    'magics_config_succeed' => '道具基本设置更新。',
    'magics_data_succeed' => '道具资料更新。',
    'magics_parameter_invalid' => '道具参数填写不全，请返回修改。',
    'magics_identifier_invalid' => '道具唯一标识重复，请返回修改。',
    'magics_filename_illegal' => '您输入的道具脚本文件名包含非法字符，请返回修改。',
    'magics_filename_invalid' => '您指定的道具脚本文件($magicfile)不存在或包含语法错误，请返回修改。',
    'magics_present_invalid' => '礼包类道具必须包含至少一种其他道具，请返回修改。',
    
    'medals_succeed' => '勋章成功编辑。',
    'medals_validate_succeed' => '勋章申请审核通过。',
    'medals_invalidate_succeed' => '勋章申请已被否决。',
    'medals_add_succeed' => '成功添加勋章。',
    'medals_please_input' => '请选择需要操作的勋章',
    
    'tasks_succeed' => '任务成功添加或更新。',
    'tasks_settings_invalid' => '部分任务设置不合理无法启用，请重新设置。',
    'tasks_noscript_or_nocfg' => '指定的任务配置文件或脚本文件不存在。',
    'tasks_basic_invalid' => '任务设置不完整，请返回！',
    'tasks_time_invalid' => '上线时间或下线时间设置不合理，请返回！',
    'tasks_reward_invalid' => '任务奖励设置不合理，请返回！',
    'tasks_del_confirm' => '你确定要删除当前任务吗？',
    'tasks_del' => '任务成功删除',
    'tasks_code_invalid' => '任务脚本代码不符合规范，无法安装，请与作者联系。',
    'tasks_install_duplicate' => '指定的任务脚本已安装，请返回。',
    'tasks_installed' => '指定任务成功安装！',
    'tasks_uninstall_confirm' => '该操作将卸载当前任务类型并删除其下所有任务，请确认！',
    'tasks_noscript' => '指定的任务脚本文件不存在。',
    'tasks_uninstalled' => '指定任务成功卸载！',
    'tasks_newest' => '请上传更高版本的任务脚本，然后刷新本页。',
    'tasks_updated' => '指定任务成功升级！',
    'tasks_newbie_setting_invalid_tid' => '您必须设置一个指定的主题，请返回修改。',
    'tasks_newbie_setting_invalid_fid' => '您必须设置一个指定的版块，请返回修改。',
    'tasks_newbie_setting_invalid_uid' => '您必须设置一个指定的会员，请返回修改。',
    
    'counter_forum_succeed' => '论坛帖数重建完成。',
    'counter_digest_succeed' => '精华帖数重建完成。',
    'counter_member_succeed' => '用户发帖数重建完成。',
    'counter_thread_succeed' => '主题帖数重建完成。',
    'counter_moved_thread_succeed' => '移动标记清理完成。',
    'counter_moved_favorites_logs_succeed' => '清理收藏夹和日志数据完成。',
    'counter_special_arrange_succeed' => '分类信息数据整理完成。',
    
    'database_export_custom_invalid' => '您至少需要选择一个数据表进行备份，请返回修改。',
    'database_export_file_invalid' => '数据文件无法保存到服务器，请检查目录属性。',
    'database_export_multivol_redirect' => '分卷备份: 数据文件 #$volume 成功创建，程序将自动继续。',
    'database_export_succeed' => '数据成功备份至服务器 <a href=\"$filename\">$filename</a> 中。',
    'database_export_filename_invalid' => '您没有输入备份文件名或文件名中使用了敏感的扩展名，请返回修改。',
    'database_export_multivol_succeed' => '恭喜您，全部 $volume 个备份文件成功创建，备份完成。\n<br />$filelist',
    'database_export_zip_succeed' => '数据成功备份并压缩至服务器 <a href=\"$filename\">$filename</a> 中。',
    'database_export_dest_invalid' => '目录不存在或无法访问，请检查 ./forumdata/ 目录。',
    'database_import_multivol_succeed' => '分卷数据成功导入论坛数据库。',
    'database_import_file_illegal' => '数据文件不存在: 可能服务器不允许上传文件或尺寸超过限制。',
    'database_import_format_illegal' => '数据文件非 Discuz! 格式，无法导入。',
    'database_import_multivol_prompt' => '分卷数据第一卷成功导入数据库，您需要自动导入本次备份的其他分卷吗？',
    'database_import_multivol_redirect' => '数据文件 #$dumpinfo[volume] 成功导入，程序将自动继续。',
    'database_import_confirm' => '导入和当前 Discuz! 版本不一致的数据极有可能产生无法解决的故障，您确定继续吗？',
    'database_import_unzip' => '$info<br />备份文件解压缩完毕，您需要自动导入备份吗？导入后解压缩的文件将会被删除。',
    'database_import_multivol_unzip' => '$info<br />备份文件解压缩完毕，您需要自动解压缩其他的分卷文件吗？',
    'database_import_multivol_unzip_redirect' => '数据文件 #$multivol 成功解压缩，程序将自动继续。',
    'database_import_multivol_confirm' => '所有分卷文件解压缩完毕，您需要自动导入备份吗？导入后解压缩的文件将会被删除。',
    'database_import_succeed' => '数据成功导入论坛数据库。',
    'database_shell_fail' => 'Shell 权限被禁止或服务器不支持，无法使用 MySQL Dump 方式备份或恢复数据，请返回。',
    'database_file_delete_succeed' => '指定备份文件成功删除。',
    'database_file_delete_invalid' => '您没有选择要删除的备份文件，请返回。',
    'database_run_query_invalid' => '升级错误，MySQL 提示: {$sqlerror} ，请返回。',
    'database_run_query_succeed' => 'Discuz! 数据结构成功升级，影响的记录行数 {$affected_rows}，请返回。',
    
    'adv_config_succeed' => '广告设置成功更新。',
    'adv_title_invalid' => '您没有填写广告标题，请返回修改。',
    'adv_endtime_invalid' => '您输入的广告结束时间早于当前时间或广告起始时间，请返回修改。',
    'adv_parameter_invalid' => '您没有完成与展现方式相对应的必填内容，请返回修改。',
    'adv_update_succeed' => '广告列表成功更新。',
    'adv_succeed' => '广告成功添加或更新。',
    'adv_title_more' => '对不起，您的广告标题超过 50 个字符，请返回修改。',
    
    'crons_filename_illegal' => '您输入的任务脚本文件名包含非法字符，请返回修改。',
    'crons_filename_invalid' => '您指定的任务脚本文件($cronfile)不存在或包含语法错误，请返回修改。',
    'crons_time_invalid' => '您没有指定计划任务执行的时间或条件，请返回修改。',
    'crons_succeed' => '计划任务成功更新。',
    'crons_run_invalid' => '您要运行任务的脚本文件($cronfile)不存在或包含语法错误，任务无法运行，请返回。',
    'crons_run_succeed' => '计划任务成功执行。',
    
    'onlinelist_succeed' => '在线列表项目成功更新。',
    'forumlinks_succeed' => '友情链接成功更新。',
    'censor_succeed' => '词语过滤成功更新。',
    'censor_batch_add_succeed' => '批量导入词语完毕。总共新增词语 <b>($newcount)</b>, 更新词语 <b>($updatecount)</b>, 忽略词语 <b>($ignorecount)</b>。',
    'censor_keywords_tooshort' => '添加关键词长度过短(少于 3 个字节)，请返回修改。',
    'censor_keywords_existence' => '当前词库中已经有此关键词，请勿添加重复词语，请返回修改',
    'smilies_type_nonexistence' => '指定的表情分类不存在。',
    'smilies_delete_invalid' => '您不能直接删除非空的表情分类，请先返回删除本分类下的所有表情。',
    'smilies_edit_succeed' => '表情列表成功更新。',
    'smilies_import_succeed_renamed' => '导入表情分类名称与现有重复，已被自动重命名。表情成功导入。',
    'smilies_import_succeed' => '表情成功导入。',
    'smilies_directory_invalid' => '表情目录 $smurl 不存在，您可以通过 FTP 创建目录 $smurl 并上传相应的表情图片。请返回。',
    'smilies_update_succeed' => '更新成功，在 $smurl 目录中共搜索到 $num 个尚未启用的表情，已自动添加到表情分类“$smtype[name]”。',
    'smilies_update_error' => '目录 $smurl 中没有找到尚未使用的表情图片，请返回。<br />添加表情请通过 FTP 上传表情图片到 $smurl 目录，然后刷新本页。',
    'thread_icon_succeed' => '主题图标成功更新。',
    'thread_stamp_succeed' => '主题图章成功更新。',
    'attachtypes_duplicate' => '新增扩展名与现有重复，请返回修改。',
    'attachtypes_succeed' => '附件类型成功更新。',
    
    'styles_export_invalid' => '指定的风格不存在，无法导出。',
    'styles_delete_invalid' => '您不能直接删除系统默认的风格，请返回选择其他风格为默认后再进行删除。',
    'styles_delete_invalid_default' => '请勿删除 ID 为 1 的风格，这是系统内置风格。如果您不喜欢这款风格，可以禁用它。',
    'styles_edit_succeed' => '界面方案成功更新。',
    'styles_import_version_invalid' => '本风格适用于 Discuz! $stylearray[version] 与当前版本($version)不一致，请返回。',
    'styles_import_version_invalid_confirm' => '本风格适用于 Discuz! $stylearray[version] 与当前版本($version)不一致，您确定要安装吗？',
    'styles_import_directory_invalid' => '模板目录无法自动建立，请设置 $basedir 目录属性为 777<br />或通过 FTP 建立目录 $stylearray[directory] 并设置属性为 777。',
    'styles_import_succeed_renamed' => '导入风格或模板名称与现有重复，已被自动重命名。界面方案成功导入。',
    'styles_import_succeed' => '界面方案成功导入。',
    'styles_install_succeed' => '界面方案成功安装！',
    'styles_edit_variable_duplicate' => '新增的替换变量名已经存在，请返回修改。',
    'styles_edit_variable_illegal' => '新增的替换变量名称不合法，请返回修改。',
    'styles_copy_succeed' => '界面方案成功复制。',
    'styles_nonexistence' => '请先选择您要进行操作的界面方案：',
    
    'tpl_directory_invalid' => '模板目录 $directory 不存在于 ./templates 中，或以 \"/\" 结尾，请返回修改。',
    'tpl_new_directory_invalid' => '您没有填写模板所在目录，请返回修改。',
    'tpl_default_directory_invalid' => '您不能修改默认模板的目录设置，请返回。',
    'tpl_delete_invalid' => '您不能删除默认模板，请返回。',
    'tpl_update_succeed' => '模板套系成功更新。',
    'tpl_reset_confirm' => '您确定要恢复 $template[directory]/$fn 为默认模板吗？',
    'tpl_reset_succeed' => '指定模板已恢复成默认模板，现在将转入模板列表。',
    'tpl_edit_nonexistence' => '指定模板套系不存在，请返回。',
    'tpl_edit_invalid' => '指定文件 $template[directory]/$fn 无法写入，<br />若需在线编辑，请将该文件和所在目录属性设置为 777。',
    'tpl_edit_succeed' => '指定模板成功编辑，现在将转入模板列表。',
    'tpl_add_invalid' => '指定模板套系不存在或已被删除，请返回。',
    'tpl_add_duplicate' => '新增模板已经存在，请返回选择其他名称。',
    'tpl_add_file_invalid' => '指定文件 $template[directory]/$name.htm 无法写入，<br />若需在线编辑，请将该文件和所在目录属性设置为 777。',
    'tpl_add_succeed' => '指定模板成功添加，现在将转入模板编辑页。',
    'tpl_delete_confirm' => '本操作不可恢复，您确定要删除模板 $fn 吗？',
    'tpl_delete_succeed' => '指定模板成功删除，现在将转入模板列表。',
    'tpl_delete_fail' => '程序无权删除模板文件，请用 FTP 登录后再试。',
    'tpl_desctpl_exists' => '目标文件 $desctemplate[directory]/$fn 已经存在，您确定要覆盖吗？',
    'tpl_tplcopy_succeed' => '模板 $fn 已成功复制到 $desctemplate[directory] ，请返回。',
    'tpl_tplcopy_invalid' => '指定文件 $desctemplate[directory]/$fn 无法写入，<br />若需在线编辑，请将该文件和所在目录属性设置为 777。',
    
    'fields_edit_succeed' => '用户资料栏目成功更新。',
    'fields_edit_invalid' => '项目名称和长度不能为空，请返回修改。',
    
    'dzcode_edit_succeed' => 'Discuz! 代码成功更新。',
    'dzcode_edit_tag_invalid' => '代码标签为空或包含非法字符，请返回修改。',
    'dzcode_edit_range_invalid' => '代码参数个数或嵌套层数范围无效，请返回修改。',
    
    'plugins_settings_module_nonexistence' => '指定的插件管理模块文件($modfile)不存在或存在语法错误，请检查是否已将插件完整上传。',
    'plugins_settings_succeed' => '插件参数设置成功更新。',
    'plugins_edit_name_invalid' => '您没有输入插件名称，请返回修改。',
    'plugins_edit_directory_invalid' => '您输入的插件目录不合法或没有使用 \"/\" 结尾，请返回修改。',
    'plugins_edit_identifier_invalid' => '您输入的唯一标识符不合法或与现有插件重复，请返回修改。',
    'plugins_edit_modules_duplicated' => '您输入的程序模块名称与现有模块重复，请返回修改。',
    'plugins_edit_modules_name_invalid' => '您输入的程序模块名称不合法，请返回修改。',
    'plugins_edit_modules_url_invalid' => '您没有输入直接链接 URL，请返回修改。',
    'plugins_edit_modules_menu_invalid' => '您没有输入菜单名称，请返回修改。',
    'plugins_edit_hooks_title_invalid' => '您输入的钩子名称不合法或与现有钩子重复，请返回修改。',
    'plugins_edit_language_invalid' => '插件语言包文件($langfile)不存在。',
    'plugins_edit_hooks_succeed' => '插件钩子成功更新。',
    'plugins_edit_var_invalid' => '您输入的配置变量名不合法或重复，请返回修改。',
    'plugins_edit_var_title_invalid' => '您没有输入配置名称，请返回修改。',
    'plugins_edit_vars_succeed' => '插件变量配置成功更新。',
    'plugins_edit_succeed' => '插件配置成功更新。',
    'plugins_add_succeed' => '插件已成功添加，请继续进行详细设置。',
    'plugins_import_version_invalid' => '本插件适用于 Discuz! $pluginarray[version] 与当前版本($version)不一致，请返回。',
    'plugins_import_version_invalid_confirm' => '本插件适用于 Discuz! $pluginarray[version] 与当前版本($version)不一致，您确定要安装吗？<br />如果本插件的安装说明中不包含修改文件的内容则说明此插件为绿色插件，您可放心安装。',
    'plugins_import_identifier_duplicated' => '您要导入的插件($plugin[name])已经安装，请返回。',
    'plugins_import_succeed' => '插件数据成功导入！<br />为了正常使用此插件，您可能还需要上传或修改相应的文件或模板，详情请查看本插件的安装说明',
    'plugins_import_hooks_title_invalid' => '插件的钩子名称不合法，无法导入。',
    'plugins_import_var_invalid' => '插件的钩子名称不合法，无法导入。',
    'plugins_install_succeed' => '插件成功安装！<br />为了正常使用此插件，您可能还需要上传或修改相应的文件或模板，详情请查看本插件的安装说明',
    'plugins_nonexistence' => '您即将进行的操作：设计插件。请先选择插件：',
    'plugins_delete_confirm' => '您确定要卸载此插件吗？',
    'plugins_delete_succeed' => '插件成功卸载！<br />为了正常使用此插件，您可能还需要删除或修改相应的文件或模板，详情请查看本插件的安装说明',
    'plugins_upgrade_hooks_title_invalid' => '插件的钩子名称不合法，无法升级。',
    'plugins_upgrade_var_invalid' => '插件的钩子名称不合法，无法升级。',
    'plugins_upgrade_succeed' => '插件成功升级到 {$toversion}！',
    
    'addons_provider_nonexistence' => '资源提供商不存在，请返回。',
    'addons_provider_disabled' => '资源提供商不存在或已被关闭，请返回',
    'addons_provider_apiinvalid' => '资源提供商资源连接错误，请返回。',
    'addons_provider_removesucceed' => '资源提供商已经移除。',
    'addons_provider_exists' => '资源提供商已经存在。',
    'addons_provider_addsucceed' => '资源提供商成功添加。',
    
    'trade_fee_error' => '交易设置有误，请返回修改。',
    'reward_credits_error' => '悬赏交易积分设置有误，请返回修改。',
    
    'update_cache_succeed' => '全部缓存更新完毕。',
    'csscache_update' => 'CSS 缓存文件已更新',
    
    'jswizard_disabled' => '论坛JS调用功能没有开启。',
    'jswizard_overflow' => '存储区域超出容量限制，请返回修改。',
    'jswizard_jskey_exists' => '数据调用的模块名称已经存在，请返回更改。',
    'jswizard_succeed' => '数据调用成功添加或更新。',
    'jswizard_copy_succeed' => '数据调用项目已复制为“{$requestdata[variable]}”。',
    'jswizard_infoside_succeed' => '边栏成功更新。',
    'jswizard_import_exist' => '需要导入的数据调用模块名称已经存在 ({$existkeys})，请返回修改。',
    'jswizard_relatedtag_succeed' => '标签聚合成功更新。',
    
    'creditwizard_resetusercredit_warning' => '<font color=\"FF0000\"><b>警告：</b></font>此操作将重置所有用户的扩展积分 extcredits{$resetcredit} 为 {$initcredits[$resetcredit]}，您是否确认此操作？',
    'creditwizard_resetusercredit_ok' => '所有用户的积分已重置',
    'creditwizard_edit_rate_invalid' => '{$group[grouptitle]} 评分上下限或 24 小时最大评分数设置有误，请返回修改。',
    'creditwizard_edit_succeed' => '积分项目设置成功更新。',
    
    'filecheck_nofound_md5file' => '不存在校验文件，无法进行此操作。',
    
    'dbcheck_permissions_invalid' => '您的服务器环境不允许执行数据库校验，无法进行此操作。',
    'dbcheck_checking' => '正在进行数据库校验，请稍候......',
    'dbcheck_nofound_md5file' => '不存在校验文件，无法进行此操作。',
    'dbcheck_ok' => '您的数据库完整无误',
    'dbcheck_repair_completed' => '数据库修复成功。',
    'dbcheck_repair_error' => '数据库修复成功，但仍有 $errorcount 个数据字段修复失败，请返回。<br /><br />$error',
    
    'faq_list_update' => '帮助列表更新',
    'faq_no_title' => '您没有填写帮助标题，请返回修改。',
    'faq_identifier_invalid' => '帮助标识重复，请返回修改。',
    'faq_keyword_toolong' => '帮助关键词过长，请返回修改。',
    
    'ftp_password_short' => 'FTP 密码不得少于 3 位，请返回修改。',
    'cachethread_dir_noexists' => '对不起，您所指定的目录 $settingsnew[cachethreaddir] 不存在或者不可写！请返回并尝试通过 FTP 将其属性改为 777。',
    
    'project_update_forum' => '论坛全局设置更新。',
    'project_import_succeed' => '设置方案成功导入',
    'project_no_title' => '没有填写方案名称，请返回。',
    'project_no_usergroup' => '你选择的用户组不存在。',
    'project_no_item' => '没有填写要保存的项目，请返回。',
    'project_sava_succeed' => '成功保存设置方案。',
    'project_target_item_invalid' => '没有指定目标项目，请返回。',
    'project_no_scheme' => '您选择的设置方案不存在，请返回。',
    'project_scheme_succeed' => '目标设置方案更新。',
    'project_invalid' => '论坛方案参数非法，请返回。',
    
    'watermarkpreview_error' => '水印功能未启用，无法预览',
    'watermarkpreview_fontpath_error' => '文本水印 TrueType 字体文件不存在',
    'watermarkpreview_createerror' => '水印图片无法生成或不符合生成水印的条件，请检查设置',
    'thumbpreview_error' => '缩略图功能未启用，无法预览',
    'thumbpreview_createerror' => '缩略图片无法生成，请检查设置',
    
    'ecommerce_invalidcredit' => '信用度必须大于 0 才能进行评级！请返回修改。',
    'ecommerce_must_larger' => '信用等级 $rank 的信用度必须大于上一等级的信用度！请返回修改。',
    
    'tags_updated' => '主题标签设置成功更新。',
    'tags_not_open' => '主题标签(TAG)功能没有开启。',
    
    'threadtype_infotypes_succeed' => '分类选项成功更新',
    'threadtype_infotypes_optionvariable_invalid' => '分类选项变量名重复，请返回修改',
    'threadtype_infotypes_noexist' => '主题选项分类不存在',
    'threadtype_infotypes_option_succeed' => '分类扩展选项成功更新',
    'threadtype_infotypes_option_invalid' => '分类扩展选项名称或者变量名为空，请返回修改。',
    'threadtype_infotypes_invalid' => '分类信息至少应该有一个选项，请返回修改。',
    'threadtype_infotypes_model_succeed' => '分类信息模型成功更新',
    
    // 自定义菜单相关
    'custommenu_edit_succeed' => '常用操作成功更新',
    'custommenu_history_delete_succeed' => '历史操作记录已清空',
    'custommenu_add_succeed' => '菜单 $lang[$title] 已成功添加到常用操作，即将返回上一页，您可以<a href=\"$BASESCRIPT?action=misc&operation=custommenu\">点这里编辑常用操作</a>',
    'custommenu_history_delete_confirm' => '本操作不可恢复，您确定要删除历史操作记录吗？',
    
    'search_result_noexists' => '对不起，没有找到相关设置或管理操作！<br />输入多个词语搜索（不同字词之间用一个空格隔开，不区分大小写），可以获得更精确的搜索结果。',
    'search_keyword_noexists' => '请输入要搜索的关键词！',
    
    'nav_add_succeed' => '导航栏成功更新。',
    
    'focus_update_succeed' => '站长推荐成功更新。',
    'focus_add_num_limit' => '对不起，最多只能添加 10 条站长推荐。',
    'focus_add_succeed' => '站长推荐添加成功。',
    'focus_topic_noexists' => '指定的站长推荐不存在。',
    'focus_topic_exists' => '添加的站长推荐已存在。',
    'focus_edit_succeed' => '站长推荐编辑成功。',
    'focus_conf_succeed' => '站长推荐设置成功。',
    
    'delete_position_succeed' => '删除帖子索引成功。',
    'select_thread_empty' => '没有选择主题，请返回重新选择。',
    'add_postposition_succeed' => '添加帖子索引成功。',
    'addpostposition_continue' => '正在添加帖子索引，切勿关闭浏览器！',
    'delete_position_gotu_add' => '已经删除了帖子索引，正转向重新创建帖子索引，切勿关闭浏览器！'

);

?>