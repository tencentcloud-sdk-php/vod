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
 * 文本关键识别结果。
 *
 * @method string getStatus() 获取任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
 * @method void setStatus(string $Status) 设置任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
 * @method string getErrCodeExt() 获取错误码，空字符串表示成功，其他值表示失败，取值请参考 [视频处理类错误码](https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81) 列表。
 * @method void setErrCodeExt(string $ErrCodeExt) 设置错误码，空字符串表示成功，其他值表示失败，取值请参考 [视频处理类错误码](https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81) 列表。
 * @method integer getErrCode() 获取错误码，0 表示成功，其他值表示失败（该字段已不推荐使用，建议使用新的错误码字段 ErrCodeExt）。
 * @method void setErrCode(integer $ErrCode) 设置错误码，0 表示成功，其他值表示失败（该字段已不推荐使用，建议使用新的错误码字段 ErrCodeExt）。
 * @method string getMessage() 获取错误信息。
 * @method void setMessage(string $Message) 设置错误信息。
 * @method AiRecognitionTaskOcrWordsResultInput getInput() 获取文本关键词识别任务输入信息。
 * @method void setInput(AiRecognitionTaskOcrWordsResultInput $Input) 设置文本关键词识别任务输入信息。
 * @method AiRecognitionTaskOcrWordsResultOutput getOutput() 获取文本关键词识别任务输出信息。
 * @method void setOutput(AiRecognitionTaskOcrWordsResultOutput $Output) 设置文本关键词识别任务输出信息。
 * @method integer getProgress() 获取文本关键词识别任务进度，取值范围 [0-100] 。
 * @method void setProgress(integer $Progress) 设置文本关键词识别任务进度，取值范围 [0-100] 。
 * @method string getBeginProcessTime() 获取文本关键词识别任务开始执行的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setBeginProcessTime(string $BeginProcessTime) 设置文本关键词识别任务开始执行的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getFinishTime() 获取文本关键词识别任务执行完毕的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setFinishTime(string $FinishTime) 设置文本关键词识别任务执行完毕的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class AiRecognitionTaskOcrWordsResult extends AbstractModel
{
    /**
     * @var string 任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
     */
    public $Status;

    /**
     * @var string 错误码，空字符串表示成功，其他值表示失败，取值请参考 [视频处理类错误码](https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81) 列表。
     */
    public $ErrCodeExt;

    /**
     * @var integer 错误码，0 表示成功，其他值表示失败（该字段已不推荐使用，建议使用新的错误码字段 ErrCodeExt）。
     */
    public $ErrCode;

    /**
     * @var string 错误信息。
     */
    public $Message;

    /**
     * @var AiRecognitionTaskOcrWordsResultInput 文本关键词识别任务输入信息。
     */
    public $Input;

    /**
     * @var AiRecognitionTaskOcrWordsResultOutput 文本关键词识别任务输出信息。
     */
    public $Output;

    /**
     * @var integer 文本关键词识别任务进度，取值范围 [0-100] 。
     */
    public $Progress;

    /**
     * @var string 文本关键词识别任务开始执行的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $BeginProcessTime;

    /**
     * @var string 文本关键词识别任务执行完毕的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $FinishTime;

    /**
     * @param string $Status 任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
     * @param string $ErrCodeExt 错误码，空字符串表示成功，其他值表示失败，取值请参考 [视频处理类错误码](https://cloud.tencent.com/document/product/266/50368#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81) 列表。
     * @param integer $ErrCode 错误码，0 表示成功，其他值表示失败（该字段已不推荐使用，建议使用新的错误码字段 ErrCodeExt）。
     * @param string $Message 错误信息。
     * @param AiRecognitionTaskOcrWordsResultInput $Input 文本关键词识别任务输入信息。
     * @param AiRecognitionTaskOcrWordsResultOutput $Output 文本关键词识别任务输出信息。
     * @param integer $Progress 文本关键词识别任务进度，取值范围 [0-100] 。
     * @param string $BeginProcessTime 文本关键词识别任务开始执行的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $FinishTime 文本关键词识别任务执行完毕的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AiRecognitionTaskOcrWordsResultInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiRecognitionTaskOcrWordsResultOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
