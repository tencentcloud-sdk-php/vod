<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本鉴别涉及令人不适宜的信息的任务控制参数。
 *
 * @method string getSwitch() 获取文本鉴别涉及令人不适宜的信息的任务开关，可选值：
<li>ON：开启文本鉴别涉及令人不适宜的信息的任务；</li>
<li>OFF：关闭文本鉴别涉及令人不适宜的信息的任务。</li>
 * @method void setSwitch(string $Switch) 设置文本鉴别涉及令人不适宜的信息的任务开关，可选值：
<li>ON：开启文本鉴别涉及令人不适宜的信息的任务；</li>
<li>OFF：关闭文本鉴别涉及令人不适宜的信息的任务。</li>
 * @method integer getBlockConfidence() 获取判定涉嫌违规的分数阈值，当审核达到该分数以上，认为涉嫌违规。取值范围：0~100。
 * @method void setBlockConfidence(integer $BlockConfidence) 设置判定涉嫌违规的分数阈值，当审核达到该分数以上，认为涉嫌违规。取值范围：0~100。
 * @method integer getReviewConfidence() 获取判定需人工复核是否违规的分数阈值，当审核达到该分数以上，认为需人工复核。取值范围：0~100。
 * @method void setReviewConfidence(integer $ReviewConfidence) 设置判定需人工复核是否违规的分数阈值，当审核达到该分数以上，认为需人工复核。取值范围：0~100。
 */
class PoliticalOcrReviewTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string 文本鉴别涉及令人不适宜的信息的任务开关，可选值：
<li>ON：开启文本鉴别涉及令人不适宜的信息的任务；</li>
<li>OFF：关闭文本鉴别涉及令人不适宜的信息的任务。</li>
     */
    public $Switch;

    /**
     * @var integer 判定涉嫌违规的分数阈值，当审核达到该分数以上，认为涉嫌违规。取值范围：0~100。
     */
    public $BlockConfidence;

    /**
     * @var integer 判定需人工复核是否违规的分数阈值，当审核达到该分数以上，认为需人工复核。取值范围：0~100。
     */
    public $ReviewConfidence;

    /**
     * @param string $Switch 文本鉴别涉及令人不适宜的信息的任务开关，可选值：
<li>ON：开启文本鉴别涉及令人不适宜的信息的任务；</li>
<li>OFF：关闭文本鉴别涉及令人不适宜的信息的任务。</li>
     * @param integer $BlockConfidence 判定涉嫌违规的分数阈值，当审核达到该分数以上，认为涉嫌违规。取值范围：0~100。
     * @param integer $ReviewConfidence 判定需人工复核是否违规的分数阈值，当审核达到该分数以上，认为需人工复核。取值范围：0~100。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("BlockConfidence",$param) and $param["BlockConfidence"] !== null) {
            $this->BlockConfidence = $param["BlockConfidence"];
        }

        if (array_key_exists("ReviewConfidence",$param) and $param["ReviewConfidence"] !== null) {
            $this->ReviewConfidence = $param["ReviewConfidence"];
        }
    }
}
