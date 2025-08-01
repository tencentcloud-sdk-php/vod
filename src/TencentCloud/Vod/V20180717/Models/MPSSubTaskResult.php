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
 * MPS 具体子任务查询结果类型。
 *
 * @method string getTaskType() 获取任务类型。MPS 的 WorkflowTask 结构中的具体子任务类型。取值：<li>AiAnalysis.DeLogo：智能擦除任务。</li>
 * @method void setTaskType(string $TaskType) 设置任务类型。MPS 的 WorkflowTask 结构中的具体子任务类型。取值：<li>AiAnalysis.DeLogo：智能擦除任务。</li>
 * @method string getStatus() 获取任务状态。有 PROCESSING，SUCCESS 和 FAIL 三种。
 * @method void setStatus(string $Status) 设置任务状态。有 PROCESSING，SUCCESS 和 FAIL 三种。
 * @method string getErrCode() 获取错误码。返回0时成功，其他值为失败。
 * @method void setErrCode(string $ErrCode) 设置错误码。返回0时成功，其他值为失败。
 * @method string getMessage() 获取错误信息。
 * @method void setMessage(string $Message) 设置错误信息。
 * @method string getInput() 获取MPS 视频处理任务输入。该字段对应 MPS 任务返回中的 Input 结果，以 JSON 格式返回。
 * @method void setInput(string $Input) 设置MPS 视频处理任务输入。该字段对应 MPS 任务返回中的 Input 结果，以 JSON 格式返回。
 * @method MPSTaskOutput getOutput() 获取MPS 视频处理任务输出。
 * @method void setOutput(MPSTaskOutput $Output) 设置MPS 视频处理任务输出。
 */
class MPSSubTaskResult extends AbstractModel
{
    /**
     * @var string 任务类型。MPS 的 WorkflowTask 结构中的具体子任务类型。取值：<li>AiAnalysis.DeLogo：智能擦除任务。</li>
     */
    public $TaskType;

    /**
     * @var string 任务状态。有 PROCESSING，SUCCESS 和 FAIL 三种。
     */
    public $Status;

    /**
     * @var string 错误码。返回0时成功，其他值为失败。
     */
    public $ErrCode;

    /**
     * @var string 错误信息。
     */
    public $Message;

    /**
     * @var string MPS 视频处理任务输入。该字段对应 MPS 任务返回中的 Input 结果，以 JSON 格式返回。
     */
    public $Input;

    /**
     * @var MPSTaskOutput MPS 视频处理任务输出。
     */
    public $Output;

    /**
     * @param string $TaskType 任务类型。MPS 的 WorkflowTask 结构中的具体子任务类型。取值：<li>AiAnalysis.DeLogo：智能擦除任务。</li>
     * @param string $Status 任务状态。有 PROCESSING，SUCCESS 和 FAIL 三种。
     * @param string $ErrCode 错误码。返回0时成功，其他值为失败。
     * @param string $Message 错误信息。
     * @param string $Input MPS 视频处理任务输入。该字段对应 MPS 任务返回中的 Input 结果，以 JSON 格式返回。
     * @param MPSTaskOutput $Output MPS 视频处理任务输出。
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new MPSTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
