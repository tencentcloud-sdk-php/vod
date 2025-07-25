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
 * 事件通知内容，其中，TranscodeCompleteEvent、ConcatCompleteEvent、ClipCompleteEvent、CreateImageSpriteCompleteEvent、SnapshotByTimeOffsetCompleteEvent 为兼容 2017 版接口发起任务的事件通知。
 *
 * @method string getEventHandle() 获取事件句柄，调用方必须调用 ConfirmEvents 来确认消息已经收到，确认有效时间 30 秒。失效后，事件可重新被获取。
 * @method void setEventHandle(string $EventHandle) 设置事件句柄，调用方必须调用 ConfirmEvents 来确认消息已经收到，确认有效时间 30 秒。失效后，事件可重新被获取。
 * @method string getEventType() 获取<b>支持事件类型：</b>
<li>NewFileUpload：视频上传完成；</li>
<li>ProcedureStateChanged：任务流状态变更；</li>
<li>FileDeleted：视频删除完成；</li>
<li>RestoreMediaComplete：视频取回完成；</li>
<li>PullComplete：视频转拉完成；</li>
<li>EditMediaComplete：视频编辑完成；</li>
<li>SplitMediaComplete：视频拆分完成；</li>
<li>ComposeMediaComplete：制作媒体文件完成；</li>
<li>WechatMiniProgramPublishComplete：微信小程序发布完成。</li>
<li>RemoveWatermark：智能去除水印完成。</li>
<li>RebuildMediaComplete：音画质重生完成事件（不推荐使用）。</li>
<li>ReviewAudioVideoComplete：音视频审核完成；</li>
<li>ExtractTraceWatermarkComplete：提取溯源水印完成；</li>
<li>ExtractCopyRightWatermarkComplete：提取版权水印完成；</li>
<li>DescribeFileAttributesComplete：获取文件属性完成；</li>
<li>QualityInspectComplete：音画质检测完成；</li>
<li>QualityEnhanceComplete：音画质重生任务完成；</li>
<li>PersistenceComplete：剪辑固化完成；</li>
<li>ComplexAdaptiveDynamicStreamingComplete：复杂自适应码流任务完成。</li>
<b>兼容 2017 版的事件类型：</b>
<li>TranscodeComplete：视频转码完成；</li>
<li>ConcatComplete：视频拼接完成；</li>
<li>ClipComplete：视频剪辑完成；</li>
<li>CreateImageSpriteComplete：视频截取雪碧图完成；</li>
<li>CreateSnapshotByTimeOffsetComplete：视频按时间点截图完成。</li>
 * @method void setEventType(string $EventType) 设置<b>支持事件类型：</b>
<li>NewFileUpload：视频上传完成；</li>
<li>ProcedureStateChanged：任务流状态变更；</li>
<li>FileDeleted：视频删除完成；</li>
<li>RestoreMediaComplete：视频取回完成；</li>
<li>PullComplete：视频转拉完成；</li>
<li>EditMediaComplete：视频编辑完成；</li>
<li>SplitMediaComplete：视频拆分完成；</li>
<li>ComposeMediaComplete：制作媒体文件完成；</li>
<li>WechatMiniProgramPublishComplete：微信小程序发布完成。</li>
<li>RemoveWatermark：智能去除水印完成。</li>
<li>RebuildMediaComplete：音画质重生完成事件（不推荐使用）。</li>
<li>ReviewAudioVideoComplete：音视频审核完成；</li>
<li>ExtractTraceWatermarkComplete：提取溯源水印完成；</li>
<li>ExtractCopyRightWatermarkComplete：提取版权水印完成；</li>
<li>DescribeFileAttributesComplete：获取文件属性完成；</li>
<li>QualityInspectComplete：音画质检测完成；</li>
<li>QualityEnhanceComplete：音画质重生任务完成；</li>
<li>PersistenceComplete：剪辑固化完成；</li>
<li>ComplexAdaptiveDynamicStreamingComplete：复杂自适应码流任务完成。</li>
<b>兼容 2017 版的事件类型：</b>
<li>TranscodeComplete：视频转码完成；</li>
<li>ConcatComplete：视频拼接完成；</li>
<li>ClipComplete：视频剪辑完成；</li>
<li>CreateImageSpriteComplete：视频截取雪碧图完成；</li>
<li>CreateSnapshotByTimeOffsetComplete：视频按时间点截图完成。</li>
 * @method FileUploadTask getFileUploadEvent() 获取视频上传完成事件，当事件类型为 NewFileUpload 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileUploadEvent(FileUploadTask $FileUploadEvent) 设置视频上传完成事件，当事件类型为 NewFileUpload 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProcedureTask getProcedureStateChangeEvent() 获取任务流状态变更事件，当事件类型为 ProcedureStateChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcedureStateChangeEvent(ProcedureTask $ProcedureStateChangeEvent) 设置任务流状态变更事件，当事件类型为 ProcedureStateChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileDeleteTask getFileDeleteEvent() 获取文件删除事件，当事件类型为 FileDeleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileDeleteEvent(FileDeleteTask $FileDeleteEvent) 设置文件删除事件，当事件类型为 FileDeleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PullUploadTask getPullCompleteEvent() 获取视频转拉完成事件，当事件类型为 PullComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPullCompleteEvent(PullUploadTask $PullCompleteEvent) 设置视频转拉完成事件，当事件类型为 PullComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method EditMediaTask getEditMediaCompleteEvent() 获取视频编辑完成事件，当事件类型为 EditMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditMediaCompleteEvent(EditMediaTask $EditMediaCompleteEvent) 设置视频编辑完成事件，当事件类型为 EditMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SplitMediaTask getSplitMediaCompleteEvent() 获取视频拆分完成事件，当事件类型为 SplitMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSplitMediaCompleteEvent(SplitMediaTask $SplitMediaCompleteEvent) 设置视频拆分完成事件，当事件类型为 SplitMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ComposeMediaTask getComposeMediaCompleteEvent() 获取制作媒体文件任务完成事件，当事件类型为 ComposeMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComposeMediaCompleteEvent(ComposeMediaTask $ComposeMediaCompleteEvent) 设置制作媒体文件任务完成事件，当事件类型为 ComposeMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClipTask2017 getClipCompleteEvent() 获取视频剪辑完成事件，当事件类型为 ClipComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClipCompleteEvent(ClipTask2017 $ClipCompleteEvent) 设置视频剪辑完成事件，当事件类型为 ClipComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TranscodeTask2017 getTranscodeCompleteEvent() 获取视频转码完成事件，当事件类型为 TranscodeComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranscodeCompleteEvent(TranscodeTask2017 $TranscodeCompleteEvent) 设置视频转码完成事件，当事件类型为 TranscodeComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CreateImageSpriteTask2017 getCreateImageSpriteCompleteEvent() 获取视频截取雪碧图完成事件，当事件类型为 CreateImageSpriteComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateImageSpriteCompleteEvent(CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent) 设置视频截取雪碧图完成事件，当事件类型为 CreateImageSpriteComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConcatTask2017 getConcatCompleteEvent() 获取视频拼接完成事件，当事件类型为 ConcatComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcatCompleteEvent(ConcatTask2017 $ConcatCompleteEvent) 设置视频拼接完成事件，当事件类型为 ConcatComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SnapshotByTimeOffsetTask2017 getSnapshotByTimeOffsetCompleteEvent() 获取视频按时间点截图完成事件，当事件类型为 CreateSnapshotByTimeOffsetComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotByTimeOffsetCompleteEvent(SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent) 设置视频按时间点截图完成事件，当事件类型为 CreateSnapshotByTimeOffsetComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method WechatPublishTask getWechatPublishCompleteEvent() 获取微信发布完成事件，当事件类型为 WechatPublishComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatPublishCompleteEvent(WechatPublishTask $WechatPublishCompleteEvent) 设置微信发布完成事件，当事件类型为 WechatPublishComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method WechatMiniProgramPublishTask getWechatMiniProgramPublishCompleteEvent() 获取微信小程序发布任务完成事件，当事件类型为 WechatMiniProgramPublishComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatMiniProgramPublishCompleteEvent(WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent) 设置微信小程序发布任务完成事件，当事件类型为 WechatMiniProgramPublishComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RemoveWatermarkTask getRemoveWatermarkCompleteEvent() 获取智能去除水印完成事件，当事件类型为 RemoveWatermark 有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoveWatermarkCompleteEvent(RemoveWatermarkTask $RemoveWatermarkCompleteEvent) 设置智能去除水印完成事件，当事件类型为 RemoveWatermark 有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RestoreMediaTask getRestoreMediaCompleteEvent() 获取视频取回完成事件，当事件类型为 RestoreMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestoreMediaCompleteEvent(RestoreMediaTask $RestoreMediaCompleteEvent) 设置视频取回完成事件，当事件类型为 RestoreMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RebuildMediaTask getRebuildMediaCompleteEvent() 获取音画质重生完成事件，当事件类型为 RebuildMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRebuildMediaCompleteEvent(RebuildMediaTask $RebuildMediaCompleteEvent) 设置音画质重生完成事件，当事件类型为 RebuildMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtractTraceWatermarkTask getExtractTraceWatermarkCompleteEvent() 获取溯源水印提取完成事件，当事件类型为 ExtractTraceWatermarkComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtractTraceWatermarkCompleteEvent(ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent) 设置溯源水印提取完成事件，当事件类型为 ExtractTraceWatermarkComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtractCopyRightWatermarkTask getExtractCopyRightWatermarkCompleteEvent() 获取版权水印提取完成事件，当事件类型为 ExtractCopyRightWatermarkComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtractCopyRightWatermarkCompleteEvent(ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent) 设置版权水印提取完成事件，当事件类型为 ExtractCopyRightWatermarkComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ReviewAudioVideoTask getReviewAudioVideoCompleteEvent() 获取音视频审核完成事件，当事件类型为 ReviewAudioVideoComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReviewAudioVideoCompleteEvent(ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent) 设置音视频审核完成事件，当事件类型为 ReviewAudioVideoComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ReduceMediaBitrateTask getReduceMediaBitrateCompleteEvent() 获取该字段已无效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReduceMediaBitrateCompleteEvent(ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent) 设置该字段已无效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeFileAttributesTask getDescribeFileAttributesCompleteEvent() 获取获取文件属性完成事件，当事件类型为 DescribeFileAttributesComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescribeFileAttributesCompleteEvent(DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent) 设置获取文件属性完成事件，当事件类型为 DescribeFileAttributesComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityInspectTask getQualityInspectCompleteEvent() 获取音画质检测完成事件，当事件类型为 QualityInspectComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityInspectCompleteEvent(QualityInspectTask $QualityInspectCompleteEvent) 设置音画质检测完成事件，当事件类型为 QualityInspectComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityEnhanceTask getQualityEnhanceCompleteEvent() 获取音画质重生完成事件，当事件类型为 QualityEnhanceComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityEnhanceCompleteEvent(QualityEnhanceTask $QualityEnhanceCompleteEvent) 设置音画质重生完成事件，当事件类型为 QualityEnhanceComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaCastEvent getMediaCastStatusChangedEvent() 获取媒体转推状态变化事件，当事件类型为 MediaCastStatusChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaCastStatusChangedEvent(MediaCastEvent $MediaCastStatusChangedEvent) 设置媒体转推状态变化事件，当事件类型为 MediaCastStatusChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PersistenceCompleteTask getPersistenceCompleteEvent() 获取剪辑固化完成事件，当事件类型为 PersistenceComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersistenceCompleteEvent(PersistenceCompleteTask $PersistenceCompleteEvent) 设置剪辑固化完成事件，当事件类型为 PersistenceComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ComplexAdaptiveDynamicStreamingTask getComplexAdaptiveDynamicStreamingCompleteEvent() 获取自适应码流任务信息，仅当 EventType 为ComplexAdaptiveDynamicStreamingComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplexAdaptiveDynamicStreamingCompleteEvent(ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent) 设置自适应码流任务信息，仅当 EventType 为ComplexAdaptiveDynamicStreamingComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventContent extends AbstractModel
{
    /**
     * @var string 事件句柄，调用方必须调用 ConfirmEvents 来确认消息已经收到，确认有效时间 30 秒。失效后，事件可重新被获取。
     */
    public $EventHandle;

    /**
     * @var string <b>支持事件类型：</b>
<li>NewFileUpload：视频上传完成；</li>
<li>ProcedureStateChanged：任务流状态变更；</li>
<li>FileDeleted：视频删除完成；</li>
<li>RestoreMediaComplete：视频取回完成；</li>
<li>PullComplete：视频转拉完成；</li>
<li>EditMediaComplete：视频编辑完成；</li>
<li>SplitMediaComplete：视频拆分完成；</li>
<li>ComposeMediaComplete：制作媒体文件完成；</li>
<li>WechatMiniProgramPublishComplete：微信小程序发布完成。</li>
<li>RemoveWatermark：智能去除水印完成。</li>
<li>RebuildMediaComplete：音画质重生完成事件（不推荐使用）。</li>
<li>ReviewAudioVideoComplete：音视频审核完成；</li>
<li>ExtractTraceWatermarkComplete：提取溯源水印完成；</li>
<li>ExtractCopyRightWatermarkComplete：提取版权水印完成；</li>
<li>DescribeFileAttributesComplete：获取文件属性完成；</li>
<li>QualityInspectComplete：音画质检测完成；</li>
<li>QualityEnhanceComplete：音画质重生任务完成；</li>
<li>PersistenceComplete：剪辑固化完成；</li>
<li>ComplexAdaptiveDynamicStreamingComplete：复杂自适应码流任务完成。</li>
<b>兼容 2017 版的事件类型：</b>
<li>TranscodeComplete：视频转码完成；</li>
<li>ConcatComplete：视频拼接完成；</li>
<li>ClipComplete：视频剪辑完成；</li>
<li>CreateImageSpriteComplete：视频截取雪碧图完成；</li>
<li>CreateSnapshotByTimeOffsetComplete：视频按时间点截图完成。</li>
     */
    public $EventType;

    /**
     * @var FileUploadTask 视频上传完成事件，当事件类型为 NewFileUpload 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileUploadEvent;

    /**
     * @var ProcedureTask 任务流状态变更事件，当事件类型为 ProcedureStateChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcedureStateChangeEvent;

    /**
     * @var FileDeleteTask 文件删除事件，当事件类型为 FileDeleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileDeleteEvent;

    /**
     * @var PullUploadTask 视频转拉完成事件，当事件类型为 PullComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PullCompleteEvent;

    /**
     * @var EditMediaTask 视频编辑完成事件，当事件类型为 EditMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EditMediaCompleteEvent;

    /**
     * @var SplitMediaTask 视频拆分完成事件，当事件类型为 SplitMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SplitMediaCompleteEvent;

    /**
     * @var ComposeMediaTask 制作媒体文件任务完成事件，当事件类型为 ComposeMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComposeMediaCompleteEvent;

    /**
     * @var ClipTask2017 视频剪辑完成事件，当事件类型为 ClipComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClipCompleteEvent;

    /**
     * @var TranscodeTask2017 视频转码完成事件，当事件类型为 TranscodeComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranscodeCompleteEvent;

    /**
     * @var CreateImageSpriteTask2017 视频截取雪碧图完成事件，当事件类型为 CreateImageSpriteComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateImageSpriteCompleteEvent;

    /**
     * @var ConcatTask2017 视频拼接完成事件，当事件类型为 ConcatComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConcatCompleteEvent;

    /**
     * @var SnapshotByTimeOffsetTask2017 视频按时间点截图完成事件，当事件类型为 CreateSnapshotByTimeOffsetComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotByTimeOffsetCompleteEvent;

    /**
     * @var WechatPublishTask 微信发布完成事件，当事件类型为 WechatPublishComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatPublishCompleteEvent;

    /**
     * @var WechatMiniProgramPublishTask 微信小程序发布任务完成事件，当事件类型为 WechatMiniProgramPublishComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatMiniProgramPublishCompleteEvent;

    /**
     * @var RemoveWatermarkTask 智能去除水印完成事件，当事件类型为 RemoveWatermark 有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoveWatermarkCompleteEvent;

    /**
     * @var RestoreMediaTask 视频取回完成事件，当事件类型为 RestoreMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestoreMediaCompleteEvent;

    /**
     * @var RebuildMediaTask 音画质重生完成事件，当事件类型为 RebuildMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RebuildMediaCompleteEvent;

    /**
     * @var ExtractTraceWatermarkTask 溯源水印提取完成事件，当事件类型为 ExtractTraceWatermarkComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtractTraceWatermarkCompleteEvent;

    /**
     * @var ExtractCopyRightWatermarkTask 版权水印提取完成事件，当事件类型为 ExtractCopyRightWatermarkComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtractCopyRightWatermarkCompleteEvent;

    /**
     * @var ReviewAudioVideoTask 音视频审核完成事件，当事件类型为 ReviewAudioVideoComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReviewAudioVideoCompleteEvent;

    /**
     * @var ReduceMediaBitrateTask 该字段已无效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReduceMediaBitrateCompleteEvent;

    /**
     * @var DescribeFileAttributesTask 获取文件属性完成事件，当事件类型为 DescribeFileAttributesComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescribeFileAttributesCompleteEvent;

    /**
     * @var QualityInspectTask 音画质检测完成事件，当事件类型为 QualityInspectComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityInspectCompleteEvent;

    /**
     * @var QualityEnhanceTask 音画质重生完成事件，当事件类型为 QualityEnhanceComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityEnhanceCompleteEvent;

    /**
     * @var MediaCastEvent 媒体转推状态变化事件，当事件类型为 MediaCastStatusChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaCastStatusChangedEvent;

    /**
     * @var PersistenceCompleteTask 剪辑固化完成事件，当事件类型为 PersistenceComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersistenceCompleteEvent;

    /**
     * @var ComplexAdaptiveDynamicStreamingTask 自适应码流任务信息，仅当 EventType 为ComplexAdaptiveDynamicStreamingComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplexAdaptiveDynamicStreamingCompleteEvent;

    /**
     * @param string $EventHandle 事件句柄，调用方必须调用 ConfirmEvents 来确认消息已经收到，确认有效时间 30 秒。失效后，事件可重新被获取。
     * @param string $EventType <b>支持事件类型：</b>
<li>NewFileUpload：视频上传完成；</li>
<li>ProcedureStateChanged：任务流状态变更；</li>
<li>FileDeleted：视频删除完成；</li>
<li>RestoreMediaComplete：视频取回完成；</li>
<li>PullComplete：视频转拉完成；</li>
<li>EditMediaComplete：视频编辑完成；</li>
<li>SplitMediaComplete：视频拆分完成；</li>
<li>ComposeMediaComplete：制作媒体文件完成；</li>
<li>WechatMiniProgramPublishComplete：微信小程序发布完成。</li>
<li>RemoveWatermark：智能去除水印完成。</li>
<li>RebuildMediaComplete：音画质重生完成事件（不推荐使用）。</li>
<li>ReviewAudioVideoComplete：音视频审核完成；</li>
<li>ExtractTraceWatermarkComplete：提取溯源水印完成；</li>
<li>ExtractCopyRightWatermarkComplete：提取版权水印完成；</li>
<li>DescribeFileAttributesComplete：获取文件属性完成；</li>
<li>QualityInspectComplete：音画质检测完成；</li>
<li>QualityEnhanceComplete：音画质重生任务完成；</li>
<li>PersistenceComplete：剪辑固化完成；</li>
<li>ComplexAdaptiveDynamicStreamingComplete：复杂自适应码流任务完成。</li>
<b>兼容 2017 版的事件类型：</b>
<li>TranscodeComplete：视频转码完成；</li>
<li>ConcatComplete：视频拼接完成；</li>
<li>ClipComplete：视频剪辑完成；</li>
<li>CreateImageSpriteComplete：视频截取雪碧图完成；</li>
<li>CreateSnapshotByTimeOffsetComplete：视频按时间点截图完成。</li>
     * @param FileUploadTask $FileUploadEvent 视频上传完成事件，当事件类型为 NewFileUpload 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProcedureTask $ProcedureStateChangeEvent 任务流状态变更事件，当事件类型为 ProcedureStateChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileDeleteTask $FileDeleteEvent 文件删除事件，当事件类型为 FileDeleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PullUploadTask $PullCompleteEvent 视频转拉完成事件，当事件类型为 PullComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param EditMediaTask $EditMediaCompleteEvent 视频编辑完成事件，当事件类型为 EditMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SplitMediaTask $SplitMediaCompleteEvent 视频拆分完成事件，当事件类型为 SplitMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ComposeMediaTask $ComposeMediaCompleteEvent 制作媒体文件任务完成事件，当事件类型为 ComposeMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClipTask2017 $ClipCompleteEvent 视频剪辑完成事件，当事件类型为 ClipComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TranscodeTask2017 $TranscodeCompleteEvent 视频转码完成事件，当事件类型为 TranscodeComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CreateImageSpriteTask2017 $CreateImageSpriteCompleteEvent 视频截取雪碧图完成事件，当事件类型为 CreateImageSpriteComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConcatTask2017 $ConcatCompleteEvent 视频拼接完成事件，当事件类型为 ConcatComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SnapshotByTimeOffsetTask2017 $SnapshotByTimeOffsetCompleteEvent 视频按时间点截图完成事件，当事件类型为 CreateSnapshotByTimeOffsetComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param WechatPublishTask $WechatPublishCompleteEvent 微信发布完成事件，当事件类型为 WechatPublishComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param WechatMiniProgramPublishTask $WechatMiniProgramPublishCompleteEvent 微信小程序发布任务完成事件，当事件类型为 WechatMiniProgramPublishComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RemoveWatermarkTask $RemoveWatermarkCompleteEvent 智能去除水印完成事件，当事件类型为 RemoveWatermark 有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RestoreMediaTask $RestoreMediaCompleteEvent 视频取回完成事件，当事件类型为 RestoreMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RebuildMediaTask $RebuildMediaCompleteEvent 音画质重生完成事件，当事件类型为 RebuildMediaComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtractTraceWatermarkTask $ExtractTraceWatermarkCompleteEvent 溯源水印提取完成事件，当事件类型为 ExtractTraceWatermarkComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtractCopyRightWatermarkTask $ExtractCopyRightWatermarkCompleteEvent 版权水印提取完成事件，当事件类型为 ExtractCopyRightWatermarkComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ReviewAudioVideoTask $ReviewAudioVideoCompleteEvent 音视频审核完成事件，当事件类型为 ReviewAudioVideoComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ReduceMediaBitrateTask $ReduceMediaBitrateCompleteEvent 该字段已无效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeFileAttributesTask $DescribeFileAttributesCompleteEvent 获取文件属性完成事件，当事件类型为 DescribeFileAttributesComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityInspectTask $QualityInspectCompleteEvent 音画质检测完成事件，当事件类型为 QualityInspectComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityEnhanceTask $QualityEnhanceCompleteEvent 音画质重生完成事件，当事件类型为 QualityEnhanceComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaCastEvent $MediaCastStatusChangedEvent 媒体转推状态变化事件，当事件类型为 MediaCastStatusChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PersistenceCompleteTask $PersistenceCompleteEvent 剪辑固化完成事件，当事件类型为 PersistenceComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ComplexAdaptiveDynamicStreamingTask $ComplexAdaptiveDynamicStreamingCompleteEvent 自适应码流任务信息，仅当 EventType 为ComplexAdaptiveDynamicStreamingComplete 时有效。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("EventHandle",$param) and $param["EventHandle"] !== null) {
            $this->EventHandle = $param["EventHandle"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("FileUploadEvent",$param) and $param["FileUploadEvent"] !== null) {
            $this->FileUploadEvent = new FileUploadTask();
            $this->FileUploadEvent->deserialize($param["FileUploadEvent"]);
        }

        if (array_key_exists("ProcedureStateChangeEvent",$param) and $param["ProcedureStateChangeEvent"] !== null) {
            $this->ProcedureStateChangeEvent = new ProcedureTask();
            $this->ProcedureStateChangeEvent->deserialize($param["ProcedureStateChangeEvent"]);
        }

        if (array_key_exists("FileDeleteEvent",$param) and $param["FileDeleteEvent"] !== null) {
            $this->FileDeleteEvent = new FileDeleteTask();
            $this->FileDeleteEvent->deserialize($param["FileDeleteEvent"]);
        }

        if (array_key_exists("PullCompleteEvent",$param) and $param["PullCompleteEvent"] !== null) {
            $this->PullCompleteEvent = new PullUploadTask();
            $this->PullCompleteEvent->deserialize($param["PullCompleteEvent"]);
        }

        if (array_key_exists("EditMediaCompleteEvent",$param) and $param["EditMediaCompleteEvent"] !== null) {
            $this->EditMediaCompleteEvent = new EditMediaTask();
            $this->EditMediaCompleteEvent->deserialize($param["EditMediaCompleteEvent"]);
        }

        if (array_key_exists("SplitMediaCompleteEvent",$param) and $param["SplitMediaCompleteEvent"] !== null) {
            $this->SplitMediaCompleteEvent = new SplitMediaTask();
            $this->SplitMediaCompleteEvent->deserialize($param["SplitMediaCompleteEvent"]);
        }

        if (array_key_exists("ComposeMediaCompleteEvent",$param) and $param["ComposeMediaCompleteEvent"] !== null) {
            $this->ComposeMediaCompleteEvent = new ComposeMediaTask();
            $this->ComposeMediaCompleteEvent->deserialize($param["ComposeMediaCompleteEvent"]);
        }

        if (array_key_exists("ClipCompleteEvent",$param) and $param["ClipCompleteEvent"] !== null) {
            $this->ClipCompleteEvent = new ClipTask2017();
            $this->ClipCompleteEvent->deserialize($param["ClipCompleteEvent"]);
        }

        if (array_key_exists("TranscodeCompleteEvent",$param) and $param["TranscodeCompleteEvent"] !== null) {
            $this->TranscodeCompleteEvent = new TranscodeTask2017();
            $this->TranscodeCompleteEvent->deserialize($param["TranscodeCompleteEvent"]);
        }

        if (array_key_exists("CreateImageSpriteCompleteEvent",$param) and $param["CreateImageSpriteCompleteEvent"] !== null) {
            $this->CreateImageSpriteCompleteEvent = new CreateImageSpriteTask2017();
            $this->CreateImageSpriteCompleteEvent->deserialize($param["CreateImageSpriteCompleteEvent"]);
        }

        if (array_key_exists("ConcatCompleteEvent",$param) and $param["ConcatCompleteEvent"] !== null) {
            $this->ConcatCompleteEvent = new ConcatTask2017();
            $this->ConcatCompleteEvent->deserialize($param["ConcatCompleteEvent"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetCompleteEvent",$param) and $param["SnapshotByTimeOffsetCompleteEvent"] !== null) {
            $this->SnapshotByTimeOffsetCompleteEvent = new SnapshotByTimeOffsetTask2017();
            $this->SnapshotByTimeOffsetCompleteEvent->deserialize($param["SnapshotByTimeOffsetCompleteEvent"]);
        }

        if (array_key_exists("WechatPublishCompleteEvent",$param) and $param["WechatPublishCompleteEvent"] !== null) {
            $this->WechatPublishCompleteEvent = new WechatPublishTask();
            $this->WechatPublishCompleteEvent->deserialize($param["WechatPublishCompleteEvent"]);
        }

        if (array_key_exists("WechatMiniProgramPublishCompleteEvent",$param) and $param["WechatMiniProgramPublishCompleteEvent"] !== null) {
            $this->WechatMiniProgramPublishCompleteEvent = new WechatMiniProgramPublishTask();
            $this->WechatMiniProgramPublishCompleteEvent->deserialize($param["WechatMiniProgramPublishCompleteEvent"]);
        }

        if (array_key_exists("RemoveWatermarkCompleteEvent",$param) and $param["RemoveWatermarkCompleteEvent"] !== null) {
            $this->RemoveWatermarkCompleteEvent = new RemoveWatermarkTask();
            $this->RemoveWatermarkCompleteEvent->deserialize($param["RemoveWatermarkCompleteEvent"]);
        }

        if (array_key_exists("RestoreMediaCompleteEvent",$param) and $param["RestoreMediaCompleteEvent"] !== null) {
            $this->RestoreMediaCompleteEvent = new RestoreMediaTask();
            $this->RestoreMediaCompleteEvent->deserialize($param["RestoreMediaCompleteEvent"]);
        }

        if (array_key_exists("RebuildMediaCompleteEvent",$param) and $param["RebuildMediaCompleteEvent"] !== null) {
            $this->RebuildMediaCompleteEvent = new RebuildMediaTask();
            $this->RebuildMediaCompleteEvent->deserialize($param["RebuildMediaCompleteEvent"]);
        }

        if (array_key_exists("ExtractTraceWatermarkCompleteEvent",$param) and $param["ExtractTraceWatermarkCompleteEvent"] !== null) {
            $this->ExtractTraceWatermarkCompleteEvent = new ExtractTraceWatermarkTask();
            $this->ExtractTraceWatermarkCompleteEvent->deserialize($param["ExtractTraceWatermarkCompleteEvent"]);
        }

        if (array_key_exists("ExtractCopyRightWatermarkCompleteEvent",$param) and $param["ExtractCopyRightWatermarkCompleteEvent"] !== null) {
            $this->ExtractCopyRightWatermarkCompleteEvent = new ExtractCopyRightWatermarkTask();
            $this->ExtractCopyRightWatermarkCompleteEvent->deserialize($param["ExtractCopyRightWatermarkCompleteEvent"]);
        }

        if (array_key_exists("ReviewAudioVideoCompleteEvent",$param) and $param["ReviewAudioVideoCompleteEvent"] !== null) {
            $this->ReviewAudioVideoCompleteEvent = new ReviewAudioVideoTask();
            $this->ReviewAudioVideoCompleteEvent->deserialize($param["ReviewAudioVideoCompleteEvent"]);
        }

        if (array_key_exists("ReduceMediaBitrateCompleteEvent",$param) and $param["ReduceMediaBitrateCompleteEvent"] !== null) {
            $this->ReduceMediaBitrateCompleteEvent = new ReduceMediaBitrateTask();
            $this->ReduceMediaBitrateCompleteEvent->deserialize($param["ReduceMediaBitrateCompleteEvent"]);
        }

        if (array_key_exists("DescribeFileAttributesCompleteEvent",$param) and $param["DescribeFileAttributesCompleteEvent"] !== null) {
            $this->DescribeFileAttributesCompleteEvent = new DescribeFileAttributesTask();
            $this->DescribeFileAttributesCompleteEvent->deserialize($param["DescribeFileAttributesCompleteEvent"]);
        }

        if (array_key_exists("QualityInspectCompleteEvent",$param) and $param["QualityInspectCompleteEvent"] !== null) {
            $this->QualityInspectCompleteEvent = new QualityInspectTask();
            $this->QualityInspectCompleteEvent->deserialize($param["QualityInspectCompleteEvent"]);
        }

        if (array_key_exists("QualityEnhanceCompleteEvent",$param) and $param["QualityEnhanceCompleteEvent"] !== null) {
            $this->QualityEnhanceCompleteEvent = new QualityEnhanceTask();
            $this->QualityEnhanceCompleteEvent->deserialize($param["QualityEnhanceCompleteEvent"]);
        }

        if (array_key_exists("MediaCastStatusChangedEvent",$param) and $param["MediaCastStatusChangedEvent"] !== null) {
            $this->MediaCastStatusChangedEvent = new MediaCastEvent();
            $this->MediaCastStatusChangedEvent->deserialize($param["MediaCastStatusChangedEvent"]);
        }

        if (array_key_exists("PersistenceCompleteEvent",$param) and $param["PersistenceCompleteEvent"] !== null) {
            $this->PersistenceCompleteEvent = new PersistenceCompleteTask();
            $this->PersistenceCompleteEvent->deserialize($param["PersistenceCompleteEvent"]);
        }

        if (array_key_exists("ComplexAdaptiveDynamicStreamingCompleteEvent",$param) and $param["ComplexAdaptiveDynamicStreamingCompleteEvent"] !== null) {
            $this->ComplexAdaptiveDynamicStreamingCompleteEvent = new ComplexAdaptiveDynamicStreamingTask();
            $this->ComplexAdaptiveDynamicStreamingCompleteEvent->deserialize($param["ComplexAdaptiveDynamicStreamingCompleteEvent"]);
        }
    }
}
