"# dr-file" 

    /**
     * 前缀修正
     * @param $path 路径名称
     * @param bool $hasSlash 是否带前缀斜杠,默认否
     * @return false|string
     * hotarunohikari
     */
    static function drFixPrefix($path, $hasSlash = false)

    /**
     * 尾缀修正
     * @param $path 路径名称
     * @param bool $hasSlash 是否带前缀斜杠,默认是
     * @return false|string
     * hotarunohikari
     */
    static function drFixSuffix($path, $hasSlash = true)
    
    /**
     * 修正文件路径名称
     * @param $path 路径名称
     * @param bool $hasSlash 是否带前后缀斜杠,默认是
     * @return false|string
     * hotarunohikari
     */
    static function drFixDirName($path, $hasSlash = true)

    /**
     * 根据日期创建目录,多用于文件上传存储
     * @param $dir 路径名称
     * @return false|string 如: 路径/年/月-日/
     * hotarunohikari
     */
    static function drMkdirByDate($dir) 

    /**
     * 生成一个不可能重复的名字
     * @param $prefix 前缀
     * @return string
     * hotarunohikari
     */
    static function drMakeName($prefix = 'dr')
