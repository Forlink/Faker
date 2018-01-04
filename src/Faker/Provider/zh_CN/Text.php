<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 18/1/4
 * Time: 下午2:11
 * Description:
 */

namespace Faker\Provider\zh_CN;


class Text extends \Faker\Provider\Text
{
    protected static $separator = '';
    protected static $separatorLen = 0;

    /**
     * All punctuation in $baseText: 、 。 「 」 『 』 ！ ？ ー ， ： ；
     */
    protected static $notEndPunct = array('、', '「', '『', 'ー', '，', '：', '；');
    protected static $endPunct = array('。', '」', '』', '！', '？');
    protected static $notBeginPunct = array('、', '。', '」', '』', '！', '？', 'ー', '，', '：', '；');

    protected static $baseText = <<<'EOT'
        我告诉他，装得好像你掌控了一切，别人就会以为你真的掌控了一切。

苹果营销哲学：
第一点是共鸣（empathy），就是紧密结合顾客的感受。
第二点是专注（focus），为了做好我们决定做的事情，我们必须拒绝所有不重要的机会。
第三点也是同样重要的一点原则，有一个让人困惑的名字，灌输（impute）。这涉及到人们是如何根据一家公司或一个产品传达的信号，来形成对它判断。“人们确实会以貌取物,，我们也许有最好的产品、最高的质量、最实用的软件等等，如果我们用一种潦草马虎的方式来展示，顾客就会认为我们的产品也是潦草马虎的；而如果我们以创新的、专业的方式展示产品，那么优质的形象也就被灌输到顾客的思想中了。“

毕加索不是说过么：’好的艺术家只是照抄，而伟大的艺术家窃取灵感。‘
在窃取伟大的灵感这方面，我们一直都是厚颜无耻的。

所见即所得（What You See Is What You Get）

如果他的一个论点没能说服别人，他会娴熟地切换到另一个论点。有时候，他会突然把你的观点占为己有，甚至都不承认自己曾有过不同的想法，这会让你猝不及防。

你完成了不可能完成的任务，因为你并没有意识到它是不可能完成的。

乔布斯的话不能照字面理解，需要转化一下。我们会把‘这是狗屎’解读为一个问句，它真实的意思是“告诉我，这为什么是最好的方法？”

如果你是个木匠，你要做一个漂亮的衣柜，你不会用胶合板做背板，虽然这一块是靠着墙的，没人会看见。你自己知道它就在哪儿，所以你会用一块漂亮的木头去做背板。如果你想晚上睡得安稳的话，就要保证外观和质量足够好。

在一段沉重的，不舒服的沉默之后，他向我抛出了一个问题，让我几天都无法释怀，‘你是想卖一辈子糖水，还是想抓住机会来改变世界？’

好了，史蒂夫，我觉得我们可以换一种方式来看待这个问题。我觉得现在的情况更接近于这样----我们都有个有钱的邻居，叫施乐，我闯进他们家准备偷电视机的时候，发现你已经把它盗走了。

可能我是不需要这些钱，可是为什么要让富达（fidelity）的那些基金经理赚到这些钱呢？为什么要让别人赚？为什么不应该是我们？

长盛不衰的公司都知道如何重塑自我。惠普就是如此：它以生产小仪器起家，后来成为生产计算器的公司，再后来成为生产计算机的公司。

我早上7点上班，晚上9点回家，孩子们都已经睡了。我不能说话，是真的不能，我精疲力竭。我无法跟劳伦说话。我能做的事情只有看半小时的电视，然后就百无聊赖的待着。

当时，人们对科技并不“感冒”。当你畏惧一样东西的时候，你不会去触碰它。我就看到我妈妈不敢碰计算机。所以我想，如果它上面有个提手，就能使一种关系变为可能。 它是易于接近，是与生俱来的，它允许你去触摸它。 

人们和他们喜欢的歌曲之间有一种情感联系。他们希望‘拥有’，而不仅仅是租用。

经典的史蒂夫风格就是，他会同意一些事，但永远不会实现。他会把你设进一个局，然后置之不理。他的表现是病态的，但这点在谈判中很有用。

永远不要害怕内部相残，与其被别人取代，不如自己取代自己。

我们坐在他房间外面的露台上，谈了两个小时。我真的非常紧张，因为他是我心目中的英雄之一。而且我也怕他本人不像我想象中那么聪明，或者他只是在“模仿”自己，就像很多人那样。

文森特回答说：“不用着急，情况很快就会变化。苹果是一个与众不同的品牌，甚至比大多数艺人的品牌更酷。”

领导者的性格奠定了整个公司的风格，就如同苹果带着乔布斯的影子，而皮克斯也深受拉塞特的影响。

在商界有个很经典的理论叫做“第二个产品综合症”。 症结在于对第一个产品的成功缺乏理解。

这种感觉就像，你有一群可爱的孩子们，而现在不得不放弃他们，而且还把他们交给了被控有虐童罪的人来收养。

有些产品就好比你从衣橱角落里翻出的喇叭牛仔裤，当时看起来比现在回想起来更好。

美国作家Alex Haley曾说过，演讲最好的开场是“我来跟你们讲个故事吧。”

成功的沉重又被重新被初学者的轻松所替代，对所有事情都不再那样确信。

记住自己终会死去，是我所知最好的方式，避免陷入认为自己会失去什么的陷阱。你已是一无所有，没理由不追随内心。

我很早就意识到，如果你不说自己的意见，他就会把你赶走。他会采取对立的立场以激发更多讨论，因为这样做可能会带来更好的结果。因此，如果你不习惯反对他的想法，那么就无法在苹果待下去。

IPhone并没有真正的发明许多新功能，而只是让这些功能实用了很多。但这很重要，如果工具不顺手，我们往往会觉得自己太傻。如果工具很糟，我们会觉得自己也很逊。如果有人改进了工具，我们会觉得自己也完美了点儿。

Ipad 将重点从内容创造转移至仅仅是吸收和使用内容。它让你成为观者，把你变成被动消费者，消费其他人的杰作。

他们有种不可思议的能力，能够创造出一些小工具，我们原先不知道自己需要它们。等推出以后我们却发现自己离不开它们。

鉴于现有的情况，对我们最有利的策略就是借力使力，和出版商建立代理模式。

只需摆出事实和数据，不要表现得傲慢狂妄，但要坚定和自信。
不要夹着尾巴召开新闻发布会，你应该直接跟他们说,'手机不完美，我们不完美。我们是凡人，在尽自己最大的努力做事，数据在这里。

即使是在土耳其，又有哪个孩子会在乎什么土耳其咖啡呢？他们都在喝世界上其他孩子喝的饮料，也都在用手机。他们跟别处的孩子没什么两样。这让我意识到，对于年轻人来说，现在整个世界都是一样的。我们现在就是同一个世界。

给你的孩子们买一部ipad并不会使他们认识到世界是要你们去剖析与重组的，它会告诉你的后代，即使是换电池这样的事情你也必须要留给专业人员去做。
但在一个充斥着低劣设备、杂牌软件、难以预测的错误信息和恼人的用户界面的世界里，这种理念带来了以迷人的用户体验为特征的非凡产品。
EOT;


    protected static $encoding = 'UTF-8';

    protected static function explode($text)
    {
        $chars = array();

        foreach (preg_split('//u', str_replace(PHP_EOL, '', $text)) as $char) {
            if (! empty($char)) {
                $chars[] = $char;
            }
        }

        return $chars;
    }

    protected static function strlen($text)
    {
        return function_exists('mb_strlen')
            ? mb_strlen($text, static::$encoding)
            : count(static::explode($text));
    }

    protected static function validStart($word)
    {
        return ! in_array($word, static::$notBeginPunct);
    }

    protected static function appendEnd($text)
    {
        $mbAvailable = extension_loaded('mbstring');

        // extract the last char of $text
        if ($mbAvailable) {
            // in order to support php 5.3, third param use 1 instead of null
            // https://secure.php.net/manual/en/function.mb-substr.php#refsect1-function.mb-substr-changelog
            $last = mb_substr($text, mb_strlen($text, static::$encoding) - 1, 1, static::$encoding);
        } else {
            $chars = static::utf8Encoding($text);
            $last = $chars[count($chars) - 1];
        }

        // if the last char is a not-valid-end punctuation, remove it
        if (in_array($last, static::$notEndPunct)) {
            if ($mbAvailable) {
                $text = mb_substr($text, 0, mb_strlen($text, static::$encoding) - 1, static::$encoding);
            } else {
                array_pop($chars);
                $text = implode('', $chars);
            }
        }

        // if the last char is not a valid punctuation, append a default one.
        return in_array($last, static::$endPunct) ? $text : $text . '。';
    }

    /**
     * Convert original string to utf-8 encoding.
     *
     * @param string $text
     * @return array
     */
    protected static function utf8Encoding($text)
    {
        $encoding = array();

        $chars = str_split($text);

        $countChars = count($chars);

        for ($i = 0; $i < $countChars; ++$i) {
            $temp = $chars[$i];

            $ord = ord($chars[$i]);

            switch (true) {
                case $ord > 251:
                    $temp .= $chars[++$i];
                // no break
                case $ord > 247:
                    $temp .= $chars[++$i];
                // no break
                case $ord > 239:
                    $temp .= $chars[++$i];
                // no break
                case $ord > 223:
                    $temp .= $chars[++$i];
                // no break
                case $ord > 191:
                    $temp .= $chars[++$i];
                // no break
            }

            $encoding[] = $temp;
        }

        return $encoding;
    }
}