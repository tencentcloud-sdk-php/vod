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
 * DescribeTaskDetail返回参数结构体
 *
 * @method string getTaskType() 获取任务类型，取值：<li>Procedure：视频处理任务；</li><li>EditMedia：视频编辑任务；</li><li>SplitMedia：视频拆条任务；</li><li>ComposeMedia：制作媒体文件任务；</li><li>WechatPublish：微信发布任务；</li><li>WechatMiniProgramPublish：微信小程序视频发布任务；</li><li>PullUpload：拉取上传媒体文件任务；</li><li>FastClipMedia：快速剪辑任务；</li><li>RemoveWatermarkTask：智能去除水印任务；</li><li>DescribeFileAttributesTask：获取文件属性任务；</li><li>RebuildMedia：音画质重生任务（不推荐使用）；</li><li>ReviewAudioVideo：音视频审核任务；</li><li>ExtractTraceWatermark：提取溯源水印任务；</li><li>ExtractCopyRightWatermark：提取版权水印任务；</li><li>QualityInspect：音画质检测任务；</li><li>QualityEnhance：音画质重生任务；</li><li>ComplexAdaptiveDynamicStreaming：复杂自适应码流任务；</li><li>ProcessMediaByMPS：MPS 视频处理任务。</li>
 * @method void setTaskType(string $TaskType) 设置任务类型，取值：<li>Procedure：视频处理任务；</li><li>EditMedia：视频编辑任务；</li><li>SplitMedia：视频拆条任务；</li><li>ComposeMedia：制作媒体文件任务；</li><li>WechatPublish：微信发布任务；</li><li>WechatMiniProgramPublish：微信小程序视频发布任务；</li><li>PullUpload：拉取上传媒体文件任务；</li><li>FastClipMedia：快速剪辑任务；</li><li>RemoveWatermarkTask：智能去除水印任务；</li><li>DescribeFileAttributesTask：获取文件属性任务；</li><li>RebuildMedia：音画质重生任务（不推荐使用）；</li><li>ReviewAudioVideo：音视频审核任务；</li><li>ExtractTraceWatermark：提取溯源水印任务；</li><li>ExtractCopyRightWatermark：提取版权水印任务；</li><li>QualityInspect：音画质检测任务；</li><li>QualityEnhance：音画质重生任务；</li><li>ComplexAdaptiveDynamicStreaming：复杂自适应码流任务；</li><li>ProcessMediaByMPS：MPS 视频处理任务。</li>
 * @method string getStatus() 获取任务状态，取值：
<li>WAITING：等待中；</li>
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成；</li>
<li>ABORTED：已终止。</li>
 * @method void setStatus(string $Status) 设置任务状态，取值：
<li>WAITING：等待中；</li>
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成；</li>
<li>ABORTED：已终止。</li>
 * @method string getCreateTime() 获取任务的创建时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置任务的创建时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getBeginProcessTime() 获取任务开始执行的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setBeginProcessTime(string $BeginProcessTime) 设置任务开始执行的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getFinishTime() 获取任务执行完毕的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setFinishTime(string $FinishTime) 设置任务执行完毕的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method ProcedureTask getProcedureTask() 获取视频处理任务信息，仅当 TaskType 为 Procedure，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcedureTask(ProcedureTask $ProcedureTask) 设置视频处理任务信息，仅当 TaskType 为 Procedure，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method EditMediaTask getEditMediaTask() 获取视频编辑任务信息，仅当 TaskType 为 EditMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditMediaTask(EditMediaTask $EditMediaTask) 设置视频编辑任务信息，仅当 TaskType 为 EditMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method WechatPublishTask getWechatPublishTask() 获取微信发布任务信息，仅当 TaskType 为 WechatPublish，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatPublishTask(WechatPublishTask $WechatPublishTask) 设置微信发布任务信息，仅当 TaskType 为 WechatPublish，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ComposeMediaTask getComposeMediaTask() 获取制作媒体文件任务信息，仅当 TaskType 为 ComposeMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComposeMediaTask(ComposeMediaTask $ComposeMediaTask) 设置制作媒体文件任务信息，仅当 TaskType 为 ComposeMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SplitMediaTask getSplitMediaTask() 获取视频拆条任务信息，仅当 TaskType 为 SplitMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSplitMediaTask(SplitMediaTask $SplitMediaTask) 设置视频拆条任务信息，仅当 TaskType 为 SplitMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishTask() 获取微信小程序发布任务信息，仅当 TaskType 为 WechatMiniProgramPublish，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatMiniProgramPublishTask(WechatMiniProgramPublishTask $WechatMiniProgramPublishTask) 设置微信小程序发布任务信息，仅当 TaskType 为 WechatMiniProgramPublish，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PullUploadTask getPullUploadTask() 获取拉取上传媒体文件任务信息，仅当 TaskType 为 PullUpload，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPullUploadTask(PullUploadTask $PullUploadTask) 设置拉取上传媒体文件任务信息，仅当 TaskType 为 PullUpload，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TranscodeTask2017 getTranscodeTask() 获取视频转码任务信息，仅当 TaskType 为 Transcode，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranscodeTask(TranscodeTask2017 $TranscodeTask) 设置视频转码任务信息，仅当 TaskType 为 Transcode，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConcatTask2017 getConcatTask() 获取视频拼接任务信息，仅当 TaskType 为 Concat，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcatTask(ConcatTask2017 $ConcatTask) 设置视频拼接任务信息，仅当 TaskType 为 Concat，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClipTask2017 getClipTask() 获取视频剪辑任务信息，仅当 TaskType 为 Clip，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClipTask(ClipTask2017 $ClipTask) 设置视频剪辑任务信息，仅当 TaskType 为 Clip，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CreateImageSpriteTask2017 getCreateImageSpriteTask() 获取截取雪碧图任务信息，仅当 TaskType 为 ImageSprite，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateImageSpriteTask(CreateImageSpriteTask2017 $CreateImageSpriteTask) 设置截取雪碧图任务信息，仅当 TaskType 为 ImageSprite，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetTask() 获取视频指定时间点截图任务信息，仅当 TaskType 为 SnapshotByTimeOffset，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotByTimeOffsetTask(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetTask) 设置视频指定时间点截图任务信息，仅当 TaskType 为 SnapshotByTimeOffset，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RemoveWatermarkTask getRemoveWatermarkTask() 获取智能去除水印任务信息，仅当 TaskType 为 RemoveWatermark，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoveWatermarkTask(RemoveWatermarkTask $RemoveWatermarkTask) 设置智能去除水印任务信息，仅当 TaskType 为 RemoveWatermark，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RebuildMediaTask getRebuildMediaTask() 获取音画质重生任务信息，仅当 TaskType 为 RebuildMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRebuildMediaTask(RebuildMediaTask $RebuildMediaTask) 设置音画质重生任务信息，仅当 TaskType 为 RebuildMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkTask() 获取提取溯源水印任务信息，仅当 TaskType 为 ExtractTraceWatermark，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtractTraceWatermarkTask(ExtractTraceWatermarkTask $ExtractTraceWatermarkTask) 设置提取溯源水印任务信息，仅当 TaskType 为 ExtractTraceWatermark，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtractCopyRightWatermarkTask getExtractCopyRightWatermarkTask() 获取提取版权水印任务信息，仅当 TaskType 为 ExtractCopyRightWatermark，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtractCopyRightWatermarkTask(ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkTask) 设置提取版权水印任务信息，仅当 TaskType 为 ExtractCopyRightWatermark，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ReviewAudioVideoTask getReviewAudioVideoTask() 获取音视频审核任务信息，仅当 TaskType 为 ReviewAudioVideo，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReviewAudioVideoTask(ReviewAudioVideoTask $ReviewAudioVideoTask) 设置音视频审核任务信息，仅当 TaskType 为 ReviewAudioVideo，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ReduceMediaBitrateTask getReduceMediaBitrateTask() 获取该字段已无效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReduceMediaBitrateTask(ReduceMediaBitrateTask $ReduceMediaBitrateTask) 设置该字段已无效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeFileAttributesTask getDescribeFileAttributesTask() 获取获取文件属性任务信息，仅当 TaskType 为 DescribeFileAttributes，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescribeFileAttributesTask(DescribeFileAttributesTask $DescribeFileAttributesTask) 设置获取文件属性任务信息，仅当 TaskType 为 DescribeFileAttributes，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityInspectTask getQualityInspectTask() 获取音画质检测任务信息，仅当 TaskType 为 QualityInspect 时该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityInspectTask(QualityInspectTask $QualityInspectTask) 设置音画质检测任务信息，仅当 TaskType 为 QualityInspect 时该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityEnhanceTask getQualityEnhanceTask() 获取音画质重生任务信息，仅当 TaskType 为 QualityEnhance，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityEnhanceTask(QualityEnhanceTask $QualityEnhanceTask) 设置音画质重生任务信息，仅当 TaskType 为 QualityEnhance，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ComplexAdaptiveDynamicStreamingTask getComplexAdaptiveDynamicStreamingTask() 获取复杂自适应码流任务信息，仅当 TaskType 为 ComplexAdaptiveDynamicStreaming，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplexAdaptiveDynamicStreamingTask(ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingTask) 设置复杂自适应码流任务信息，仅当 TaskType 为 ComplexAdaptiveDynamicStreaming，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProcessMediaByMPS getProcessMediaByMPSTask() 获取MPS 视频处理任务信息，仅当 TaskType 为 ProcessMediaByMPS，该字段有值。
 * @method void setProcessMediaByMPSTask(ProcessMediaByMPS $ProcessMediaByMPSTask) 设置MPS 视频处理任务信息，仅当 TaskType 为 ProcessMediaByMPS，该字段有值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string 任务类型，取值：<li>Procedure：视频处理任务；</li><li>EditMedia：视频编辑任务；</li><li>SplitMedia：视频拆条任务；</li><li>ComposeMedia：制作媒体文件任务；</li><li>WechatPublish：微信发布任务；</li><li>WechatMiniProgramPublish：微信小程序视频发布任务；</li><li>PullUpload：拉取上传媒体文件任务；</li><li>FastClipMedia：快速剪辑任务；</li><li>RemoveWatermarkTask：智能去除水印任务；</li><li>DescribeFileAttributesTask：获取文件属性任务；</li><li>RebuildMedia：音画质重生任务（不推荐使用）；</li><li>ReviewAudioVideo：音视频审核任务；</li><li>ExtractTraceWatermark：提取溯源水印任务；</li><li>ExtractCopyRightWatermark：提取版权水印任务；</li><li>QualityInspect：音画质检测任务；</li><li>QualityEnhance：音画质重生任务；</li><li>ComplexAdaptiveDynamicStreaming：复杂自适应码流任务；</li><li>ProcessMediaByMPS：MPS 视频处理任务。</li>
     */
    public $TaskType;

    /**
     * @var string 任务状态，取值：
<li>WAITING：等待中；</li>
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成；</li>
<li>ABORTED：已终止。</li>
     */
    public $Status;

    /**
     * @var string 任务的创建时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @var string 任务开始执行的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $BeginProcessTime;

    /**
     * @var string 任务执行完毕的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $FinishTime;

    /**
     * @var ProcedureTask 视频处理任务信息，仅当 TaskType 为 Procedure，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcedureTask;

    /**
     * @var EditMediaTask 视频编辑任务信息，仅当 TaskType 为 EditMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EditMediaTask;

    /**
     * @var WechatPublishTask 微信发布任务信息，仅当 TaskType 为 WechatPublish，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatPublishTask;

    /**
     * @var ComposeMediaTask 制作媒体文件任务信息，仅当 TaskType 为 ComposeMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComposeMediaTask;

    /**
     * @var SplitMediaTask 视频拆条任务信息，仅当 TaskType 为 SplitMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SplitMediaTask;

    /**
     * @var WechatMiniProgramPublishTask 微信小程序发布任务信息，仅当 TaskType 为 WechatMiniProgramPublish，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatMiniProgramPublishTask;

    /**
     * @var PullUploadTask 拉取上传媒体文件任务信息，仅当 TaskType 为 PullUpload，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PullUploadTask;

    /**
     * @var TranscodeTask2017 视频转码任务信息，仅当 TaskType 为 Transcode，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranscodeTask;

    /**
     * @var ConcatTask2017 视频拼接任务信息，仅当 TaskType 为 Concat，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConcatTask;

    /**
     * @var ClipTask2017 视频剪辑任务信息，仅当 TaskType 为 Clip，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClipTask;

    /**
     * @var CreateImageSpriteTask2017 截取雪碧图任务信息，仅当 TaskType 为 ImageSprite，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateImageSpriteTask;

    /**
     * @var SnapshotByTimeOffsetTask2017 视频指定时间点截图任务信息，仅当 TaskType 为 SnapshotByTimeOffset，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var RemoveWatermarkTask 智能去除水印任务信息，仅当 TaskType 为 RemoveWatermark，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoveWatermarkTask;

    /**
     * @var RebuildMediaTask 音画质重生任务信息，仅当 TaskType 为 RebuildMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RebuildMediaTask;

    /**
     * @var ExtractTraceWatermarkTask 提取溯源水印任务信息，仅当 TaskType 为 ExtractTraceWatermark，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtractTraceWatermarkTask;

    /**
     * @var ExtractCopyRightWatermarkTask 提取版权水印任务信息，仅当 TaskType 为 ExtractCopyRightWatermark，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtractCopyRightWatermarkTask;

    /**
     * @var ReviewAudioVideoTask 音视频审核任务信息，仅当 TaskType 为 ReviewAudioVideo，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReviewAudioVideoTask;

    /**
     * @var ReduceMediaBitrateTask 该字段已无效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReduceMediaBitrateTask;

    /**
     * @var DescribeFileAttributesTask 获取文件属性任务信息，仅当 TaskType 为 DescribeFileAttributes，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescribeFileAttributesTask;

    /**
     * @var QualityInspectTask 音画质检测任务信息，仅当 TaskType 为 QualityInspect 时该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityInspectTask;

    /**
     * @var QualityEnhanceTask 音画质重生任务信息，仅当 TaskType 为 QualityEnhance，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityEnhanceTask;

    /**
     * @var ComplexAdaptiveDynamicStreamingTask 复杂自适应码流任务信息，仅当 TaskType 为 ComplexAdaptiveDynamicStreaming，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplexAdaptiveDynamicStreamingTask;

    /**
     * @var ProcessMediaByMPS MPS 视频处理任务信息，仅当 TaskType 为 ProcessMediaByMPS，该字段有值。
     */
    public $ProcessMediaByMPSTask;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskType 任务类型，取值：<li>Procedure：视频处理任务；</li><li>EditMedia：视频编辑任务；</li><li>SplitMedia：视频拆条任务；</li><li>ComposeMedia：制作媒体文件任务；</li><li>WechatPublish：微信发布任务；</li><li>WechatMiniProgramPublish：微信小程序视频发布任务；</li><li>PullUpload：拉取上传媒体文件任务；</li><li>FastClipMedia：快速剪辑任务；</li><li>RemoveWatermarkTask：智能去除水印任务；</li><li>DescribeFileAttributesTask：获取文件属性任务；</li><li>RebuildMedia：音画质重生任务（不推荐使用）；</li><li>ReviewAudioVideo：音视频审核任务；</li><li>ExtractTraceWatermark：提取溯源水印任务；</li><li>ExtractCopyRightWatermark：提取版权水印任务；</li><li>QualityInspect：音画质检测任务；</li><li>QualityEnhance：音画质重生任务；</li><li>ComplexAdaptiveDynamicStreaming：复杂自适应码流任务；</li><li>ProcessMediaByMPS：MPS 视频处理任务。</li>
     * @param string $Status 任务状态，取值：
<li>WAITING：等待中；</li>
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成；</li>
<li>ABORTED：已终止。</li>
     * @param string $CreateTime 任务的创建时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $BeginProcessTime 任务开始执行的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $FinishTime 任务执行完毕的时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param ProcedureTask $ProcedureTask 视频处理任务信息，仅当 TaskType 为 Procedure，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param EditMediaTask $EditMediaTask 视频编辑任务信息，仅当 TaskType 为 EditMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param WechatPublishTask $WechatPublishTask 微信发布任务信息，仅当 TaskType 为 WechatPublish，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ComposeMediaTask $ComposeMediaTask 制作媒体文件任务信息，仅当 TaskType 为 ComposeMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SplitMediaTask $SplitMediaTask 视频拆条任务信息，仅当 TaskType 为 SplitMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishTask 微信小程序发布任务信息，仅当 TaskType 为 WechatMiniProgramPublish，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PullUploadTask $PullUploadTask 拉取上传媒体文件任务信息，仅当 TaskType 为 PullUpload，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TranscodeTask2017 $TranscodeTask 视频转码任务信息，仅当 TaskType 为 Transcode，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConcatTask2017 $ConcatTask 视频拼接任务信息，仅当 TaskType 为 Concat，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClipTask2017 $ClipTask 视频剪辑任务信息，仅当 TaskType 为 Clip，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CreateImageSpriteTask2017 $CreateImageSpriteTask 截取雪碧图任务信息，仅当 TaskType 为 ImageSprite，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetTask 视频指定时间点截图任务信息，仅当 TaskType 为 SnapshotByTimeOffset，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RemoveWatermarkTask $RemoveWatermarkTask 智能去除水印任务信息，仅当 TaskType 为 RemoveWatermark，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RebuildMediaTask $RebuildMediaTask 音画质重生任务信息，仅当 TaskType 为 RebuildMedia，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkTask 提取溯源水印任务信息，仅当 TaskType 为 ExtractTraceWatermark，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkTask 提取版权水印任务信息，仅当 TaskType 为 ExtractCopyRightWatermark，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ReviewAudioVideoTask $ReviewAudioVideoTask 音视频审核任务信息，仅当 TaskType 为 ReviewAudioVideo，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateTask 该字段已无效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeFileAttributesTask $DescribeFileAttributesTask 获取文件属性任务信息，仅当 TaskType 为 DescribeFileAttributes，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityInspectTask $QualityInspectTask 音画质检测任务信息，仅当 TaskType 为 QualityInspect 时该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityEnhanceTask $QualityEnhanceTask 音画质重生任务信息，仅当 TaskType 为 QualityEnhance，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingTask 复杂自适应码流任务信息，仅当 TaskType 为 ComplexAdaptiveDynamicStreaming，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProcessMediaByMPS $ProcessMediaByMPSTask MPS 视频处理任务信息，仅当 TaskType 为 ProcessMediaByMPS，该字段有值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("ProcedureTask",$param) and $param["ProcedureTask"] !== null) {
            $this->ProcedureTask = new ProcedureTask();
            $this->ProcedureTask->deserialize($param["ProcedureTask"]);
        }

        if (array_key_exists("EditMediaTask",$param) and $param["EditMediaTask"] !== null) {
            $this->EditMediaTask = new EditMediaTask();
            $this->EditMediaTask->deserialize($param["EditMediaTask"]);
        }

        if (array_key_exists("WechatPublishTask",$param) and $param["WechatPublishTask"] !== null) {
            $this->WechatPublishTask = new WechatPublishTask();
            $this->WechatPublishTask->deserialize($param["WechatPublishTask"]);
        }

        if (array_key_exists("ComposeMediaTask",$param) and $param["ComposeMediaTask"] !== null) {
            $this->ComposeMediaTask = new ComposeMediaTask();
            $this->ComposeMediaTask->deserialize($param["ComposeMediaTask"]);
        }

        if (array_key_exists("SplitMediaTask",$param) and $param["SplitMediaTask"] !== null) {
            $this->SplitMediaTask = new SplitMediaTask();
            $this->SplitMediaTask->deserialize($param["SplitMediaTask"]);
        }

        if (array_key_exists("WechatMiniProgramPublishTask",$param) and $param["WechatMiniProgramPublishTask"] !== null) {
            $this->WechatMiniProgramPublishTask = new WechatMiniProgramPublishTask();
            $this->WechatMiniProgramPublishTask->deserialize($param["WechatMiniProgramPublishTask"]);
        }

        if (array_key_exists("PullUploadTask",$param) and $param["PullUploadTask"] !== null) {
            $this->PullUploadTask = new PullUploadTask();
            $this->PullUploadTask->deserialize($param["PullUploadTask"]);
        }

        if (array_key_exists("TranscodeTask",$param) and $param["TranscodeTask"] !== null) {
            $this->TranscodeTask = new TranscodeTask2017();
            $this->TranscodeTask->deserialize($param["TranscodeTask"]);
        }

        if (array_key_exists("ConcatTask",$param) and $param["ConcatTask"] !== null) {
            $this->ConcatTask = new ConcatTask2017();
            $this->ConcatTask->deserialize($param["ConcatTask"]);
        }

        if (array_key_exists("ClipTask",$param) and $param["ClipTask"] !== null) {
            $this->ClipTask = new ClipTask2017();
            $this->ClipTask->deserialize($param["ClipTask"]);
        }

        if (array_key_exists("CreateImageSpriteTask",$param) and $param["CreateImageSpriteTask"] !== null) {
            $this->CreateImageSpriteTask = new CreateImageSpriteTask2017();
            $this->CreateImageSpriteTask->deserialize($param["CreateImageSpriteTask"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetTask",$param) and $param["SnapshotByTimeOffsetTask"] !== null) {
            $this->SnapshotByTimeOffsetTask = new SnapshotByTimeOffsetTask2017();
            $this->SnapshotByTimeOffsetTask->deserialize($param["SnapshotByTimeOffsetTask"]);
        }

        if (array_key_exists("RemoveWatermarkTask",$param) and $param["RemoveWatermarkTask"] !== null) {
            $this->RemoveWatermarkTask = new RemoveWatermarkTask();
            $this->RemoveWatermarkTask->deserialize($param["RemoveWatermarkTask"]);
        }

        if (array_key_exists("RebuildMediaTask",$param) and $param["RebuildMediaTask"] !== null) {
            $this->RebuildMediaTask = new RebuildMediaTask();
            $this->RebuildMediaTask->deserialize($param["RebuildMediaTask"]);
        }

        if (array_key_exists("ExtractTraceWatermarkTask",$param) and $param["ExtractTraceWatermarkTask"] !== null) {
            $this->ExtractTraceWatermarkTask = new ExtractTraceWatermarkTask();
            $this->ExtractTraceWatermarkTask->deserialize($param["ExtractTraceWatermarkTask"]);
        }

        if (array_key_exists("ExtractCopyRightWatermarkTask",$param) and $param["ExtractCopyRightWatermarkTask"] !== null) {
            $this->ExtractCopyRightWatermarkTask = new ExtractCopyRightWatermarkTask();
            $this->ExtractCopyRightWatermarkTask->deserialize($param["ExtractCopyRightWatermarkTask"]);
        }

        if (array_key_exists("ReviewAudioVideoTask",$param) and $param["ReviewAudioVideoTask"] !== null) {
            $this->ReviewAudioVideoTask = new ReviewAudioVideoTask();
            $this->ReviewAudioVideoTask->deserialize($param["ReviewAudioVideoTask"]);
        }

        if (array_key_exists("ReduceMediaBitrateTask",$param) and $param["ReduceMediaBitrateTask"] !== null) {
            $this->ReduceMediaBitrateTask = new ReduceMediaBitrateTask();
            $this->ReduceMediaBitrateTask->deserialize($param["ReduceMediaBitrateTask"]);
        }

        if (array_key_exists("DescribeFileAttributesTask",$param) and $param["DescribeFileAttributesTask"] !== null) {
            $this->DescribeFileAttributesTask = new DescribeFileAttributesTask();
            $this->DescribeFileAttributesTask->deserialize($param["DescribeFileAttributesTask"]);
        }

        if (array_key_exists("QualityInspectTask",$param) and $param["QualityInspectTask"] !== null) {
            $this->QualityInspectTask = new QualityInspectTask();
            $this->QualityInspectTask->deserialize($param["QualityInspectTask"]);
        }

        if (array_key_exists("QualityEnhanceTask",$param) and $param["QualityEnhanceTask"] !== null) {
            $this->QualityEnhanceTask = new QualityEnhanceTask();
            $this->QualityEnhanceTask->deserialize($param["QualityEnhanceTask"]);
        }

        if (array_key_exists("ComplexAdaptiveDynamicStreamingTask",$param) and $param["ComplexAdaptiveDynamicStreamingTask"] !== null) {
            $this->ComplexAdaptiveDynamicStreamingTask = new ComplexAdaptiveDynamicStreamingTask();
            $this->ComplexAdaptiveDynamicStreamingTask->deserialize($param["ComplexAdaptiveDynamicStreamingTask"]);
        }

        if (array_key_exists("ProcessMediaByMPSTask",$param) and $param["ProcessMediaByMPSTask"] !== null) {
            $this->ProcessMediaByMPSTask = new ProcessMediaByMPS();
            $this->ProcessMediaByMPSTask->deserialize($param["ProcessMediaByMPSTask"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
