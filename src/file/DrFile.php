<?php

/**
 * author : hotarunohikari
 */

namespace dr\file;


class DrFile
{

    /**
     * 前缀修正
     * @param $path 路径名称
     * @param bool $hasSlash 是否带前缀斜杠,默认否
     * @return false|string
     * hotarunohikari
     */
    static function drFixPrefix($path, $hasSlash = false) {
        $prefix = substr($path, 0, 1);
        if ($prefix == "/" || $prefix == "\\") {
            $path = substr($path, 1);
            $path = $hasSlash ? '/' . $path : $path;
        } else {
            $path = $hasSlash ? '/' . $path : $path;
        }
        return $path;
    }

    /**
     * 尾缀修正
     * @param $path 路径名称
     * @param bool $hasSlash 是否带前缀斜杠,默认否
     * @return false|string
     * hotarunohikari
     */
    static function drFixSuffix($path, $hasSlash = true) {
        $suffix = substr($path, -1, 1);
        if ($suffix == "/" || $suffix == "\\") {
            $path = substr($path, 0, -1);
            $path = $hasSlash ? $path . "/" : $path;
        } else {
            $path = $hasSlash ? $path . "/" : $path;
        }
        return $path;
    }

    /**
     * 修正文件路径名称
     * @param $path 路径名称
     * @param bool $hasSlash 是否带前后缀斜杠,默认是
     * @return false|string
     * hotarunohikari
     */
    static function drFixDirName($path, $hasSlash = true){
        return self::drFixSuffix(self::drFixPrefix($path,$hasSlash),$hasSlash);
    }

    // 根据日期创建目录,多用于文件上传存储
    static function drMkdirByDate($dir) {
        $dir = self::drFixPrefix($dir);
        $dir = self::drFixSuffix($dir);
        $dir = $dir . date("Y") . "/" . date("md") . "/";
        if (!is_dir($dir)) {
            try {
                mkdir($dir, 0777, true);
            } catch (\Exception $e) {
                throw new Exception("目录创建失败");
            }
        }
        return $dir;
    }

    // 生成一个不可能重复的名字
    static function drMakeName($prefix = 'dr') {
        return session_create_id($prefix);
    }

}