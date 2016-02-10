<?php
    /**
     * WordPress基础配置文件。
     *
     * 这个文件被安装程序用于自动生成wp-config.php配置文件，
     * 您可以不使用网站，您需要手动复制这个文件，
     * 并重命名为“wp-config.php”，然后填入相关信息。
     *
     * 本文件包含以下配置选项：
     *
     * * MySQL设置
     * * 密钥
     * * 数据库表名前缀
     * * ABSPATH
     *
     * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
     *
     * @package WordPress
     */
    
    // ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
    /** WordPress数据库的名称 */
    define('DB_NAME', 'fecweb');
    
    /** MySQL数据库用户名 */
    define('DB_USER', 'root');
    
    /** MySQL数据库密码 */
    define('DB_PASSWORD', '');
    
    /** MySQL主机 */
    define('DB_HOST', 'localhost');
    
    /** 创建数据表时默认的文字编码 */
    define('DB_CHARSET', 'utf8mb4');
    
    /** 数据库整理类型。如不确定请勿更改 */
    define('DB_COLLATE', '');
    
    /**#@+
     * 身份认证密钥与盐。
     *
     * 修改为任意独一无二的字串！
     * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
     * WordPress.org密钥生成服务}
     * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
     *
     * @since 2.6.0
     */
    define('AUTH_KEY',         'G5i?-sw(P:NbfdCE^:zQS_MIl2N-(OQ5Z:NLV=Q`z1{g?;un6iI6F{Bgr.TWV+k7');
    define('SECURE_AUTH_KEY',  'x5xn4|QKE;_oU5pV}hH},9O3p(q/R+NG,g#=-:gTNDWL+|~vGrNHhN0ZHdn2?AI$');
    define('LOGGED_IN_KEY',    'tA,YjD._PWWp4`=wq]o60A0C3*8@N/-c|KRMta8]!0nKEf7g;cJtT<V}vmOhzyz]');
    define('NONCE_KEY',        '?O^3u6Vb&J2J2~<X:x+9ta2;YiBN|NULc$>Jmj7Cv?FzL19<cMx.ya7#f7+S3]%X');
    define('AUTH_SALT',        'dF eps6IMDElg-r@)^q=J;v%(h_pM7%JTG`v)`z&79@KBZK,@&0.>l:nu1qu3*Po');
    define('SECURE_AUTH_SALT', 'kHza-Y;e|#{3 1chU`o9RKVa(Yp&b~eD)f,D;TOOLlASuN2:c:;*7zoO$E-Ytm0m');
    define('LOGGED_IN_SALT',   'oeh$#cQ@H~=1QQ_IXkjGP-S_t_P6b9M}/Cb3K^cq)m~fQ^iQjCNHahdw| bx*k}@');
    define('NONCE_SALT',       '-;`o<xJp+$6h]vP[|cnN4cr1bK0px%]uC&nR$&`:rOC d|zvfG]rjCZUE~b>2W|F');
    
    /**#@-*/
    
    /**
     * WordPress数据表前缀。
     *
     * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
     * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
     */
    $table_prefix  = 'wp_';
    
    /**
     * 开发者专用：WordPress调试模式。
     *
     * 将这个值改为true，WordPress将显示所有用于开发的提示。
     * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
     *
     * 要获取其他能用于调试的信息，请访问Codex。
     *
     * @link https://codex.wordpress.org/Debugging_in_WordPress
     */
    define('WP_DEBUG', false);
    
    /**
     * zh_CN本地化设置：启用ICP备案号显示
     *
     * 可在设置→常规中修改。
     * 如需禁用，请移除或注释掉本行。
     */
    define('WP_ZH_CN_ICP_NUM', true);
    
    /* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */
    
    /** WordPress目录的绝对路径。 */
    if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
    
    /** 设置WordPress变量和包含文件。 */
    require_once(ABSPATH . 'wp-settings.php');
    
    /** 解决下载插件主题时“需要访问您网页服务器的权限”Bug */
    
    define("FS_METHOD","direct");
    define("FS_CHMOD_DIR", 0777);
    define("FS_CHMOD_FILE", 0777);
    
