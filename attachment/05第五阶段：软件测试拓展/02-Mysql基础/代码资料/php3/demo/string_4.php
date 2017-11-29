<?php 
$username='king';
echo $username;
echo '<hr/>';
echo "$username";
echo '<hr/>';
echo '$username';
echo '<hr/>';
/*
 A>B,C<D,king&queen,He Said "I'm Fine"
 */
// $string='A>B,C<D,king&queen,He Said "I'm Fine"';
// echo $string;
// $string="A>B,C<D,king&queen,He Said "I'm Fine"";
// echo $string;

//当内容和定界符冲突的时候，用转义符可以解决
// $string='A>B,C<D,king&queen,He Said "I\'m Fine"';
// echo $string;
echo '<hr/>';
$string='A&gt;B,C&lt;D,King&amp;queen,He Said &quot;I&#39;m Fine&quot;';
echo $string;
echo '<hr/>';
//当出现在源代码中的时候'或者"就是本身
$string="<h1 align=\"center\">A&gt;B,C&lt;D,King&amp;queen,He Said &quot;I&#39;m Fine&quot;</h1>";
echo $string;
echo '<hr/>';
//双引号解析所有转义符
$string="a\nb\rc\td\\e\"f\$";
echo $string;

echo '<hr/>';
//单引号只解析2个转义符，就是\\和\'
$string='a\nb\rc\td\ve\$f\'\\';
echo $string;

echo '<hr/>';

$string='king';
echo "'$string'";
echo '<hr/>';
echo '"$string"';
echo '<hr/>';
//kings
echo $string;
echo 's';
echo '<hr/>';
echo $string,'s';
echo '<hr/>';
//PHP引擎在解析变量的时候会尽可能多的向后去取合法字符，认为
//取的合法字符越多，变量的含义就越明确。
echo "{$string}s";
echo '<hr/>';
echo "${string}s";
echo '<hr/>';
//在变量名称和花括号之间不要有空格
echo "{ $string }s";
echo '<hr/>';
//字符串的下标从0开始
$string='abcdef';
//查找指定字符
echo $string{0};
echo $string{5};
echo '<hr/>';
//更新指定字符,只能替换成一个字符，但是不能替换成中文
$string{0}='king';
echo $string;
echo '<hr/>';
$string{70}='q';
echo $string;
echo '<hr/>';
$string{0}='';
echo $string;
echo '<hr/>';
$string='abcdef';
echo $string[0];





























