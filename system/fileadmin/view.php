<?php
require "config.php";
if(!isset($_GET['path']))
{
    header("Location: ./404.php");
    exit;
}
elseif(($path=trim($_GET['path']))=="")
{
    header("Location: ./404.php");
    exit;
}
elseif(!is_file($path))
{
    header("Location: ./404.php");
    exit;
}
elseif(!is_readable($path))
{
    xhtml_head("查看文件");
    echo "<div class=\"like\">\n";
    echo "<a href=\"./index.php?path=".urlencode(dirname($path))."\"]>返回目录</a>错误提示\n";
    echo "</div>\n";
    echo "<div class=\"love\">\n";
    echo "此文件您没有读取权限！";
    echo "</div>\n";
    xhtml_footer();
}
else
{
    xhtml_head("查看文件");
    echo "<div class=\"like\">\n";
    echo "<a href=\"./index.php?path=".urlencode(dirname($path))."\"]>返回目录</a>选择编码\n";
    echo "</div>\n";
    echo "<div class=\"love\">";
    echo "<form action=\"\" method=\"GET\">\n";
    echo "<select name=\"charset\">\n";
    if(!function_exists("mb_convert_encoding"))
    {
        echo "<option>缺少模块</option>\n";
    }
    else
    {
        foreach(mb_list_encodings() as $encode)
        {
            echo "<option value=\"$encode\">$encode</option>\n";
        }
    }
    echo "</select>\n";
    echo "<input type=\"hidden\" name=\"path\" value=\"$path\" />";
    echo "<input type=\"submit\" value=\"设置编码\" />\n";
    echo "</form>\n";
    echo "</div>\n";
    echo "<div class=\"like\">爱特文件内容浏览</div>\n";
    if(filesize($path)<1)
    {
        echo "<div class=\"love\">\n";
        echo "这是一个空空的文件！\n";
        echo "</div>\n";
    }
    else
    {
        echo "<div class=\"love\">\n";
        if(!($data=file_get_contents($path)))
        {
            echo "读取文件时发生了错误！\n";
        }
        else
        {
            if(!isset($_GET['charset']))
            {
                echo nl2br(___codepre(___convert($data,"UTF-8")));
            }
            elseif(($charset=trim($_GET['charset']))=="")
            {
                echo nl2br(___codepre(___convert($data,"UTF-8")));
            }
            else
            {
                echo nl2br(___codepre(___convert($data,"UTF-8",$charset)));
            }
        }
        echo "</div>";
    }
    xhtml_footer();
}
?>
