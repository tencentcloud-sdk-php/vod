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
 * CreateImageSpriteTemplate请求参数结构体
 *
 * @method string getSampleType() 获取采样类型，取值：
<li>Percent：按百分比。</li>
<li>Time：按时间间隔。</li>
 * @method void setSampleType(string $SampleType) 设置采样类型，取值：
<li>Percent：按百分比。</li>
<li>Time：按时间间隔。</li>
 * @method integer getSampleInterval() 获取采样间隔。
<li>当 SampleType 为 Percent 时，指定采样间隔的百分比。</li>
<li>当 SampleType 为 Time 时，指定采样间隔的时间，单位为秒。</li>
 * @method void setSampleInterval(integer $SampleInterval) 设置采样间隔。
<li>当 SampleType 为 Percent 时，指定采样间隔的百分比。</li>
<li>当 SampleType 为 Time 时，指定采样间隔的时间，单位为秒。</li>
 * @method integer getRowCount() 获取雪碧图中小图的行数。
注意：小图的行数会影响最终大图的高度，大图的高度最大为15000像素，其中大图的高度为小图行数与小图高度的乘积。
 * @method void setRowCount(integer $RowCount) 设置雪碧图中小图的行数。
注意：小图的行数会影响最终大图的高度，大图的高度最大为15000像素，其中大图的高度为小图行数与小图高度的乘积。
 * @method integer getColumnCount() 获取雪碧图中小图的列数。
注意：小图的列数会影响最终大图的宽度，大图的宽度最大为15000像素，其中大图的宽度为小图列数与小图宽度的乘积。
 * @method void setColumnCount(integer $ColumnCount) 设置雪碧图中小图的列数。
注意：小图的列数会影响最终大图的宽度，大图的宽度最大为15000像素，其中大图的宽度为小图列数与小图宽度的乘积。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getName() 获取雪碧图模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置雪碧图模板名称，长度限制：64 个字符。
 * @method string getComment() 获取模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置模板描述信息，长度限制：256 个字符。
 * @method string getFillType() 获取填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：
<li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li>
<li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li>
默认值：black 。
 * @method void setFillType(string $FillType) 设置填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：
<li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li>
<li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li>
默认值：black 。
 * @method integer getWidth() 获取雪碧图中小图的宽度（或长边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
注意：小图的宽度会影响最终大图的宽度，大图的宽度最大为15000像素，其中大图的宽度为小图列数与小图宽度的乘积。
 * @method void setWidth(integer $Width) 设置雪碧图中小图的宽度（或长边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
注意：小图的宽度会影响最终大图的宽度，大图的宽度最大为15000像素，其中大图的宽度为小图列数与小图宽度的乘积。
 * @method integer getHeight() 获取雪碧图中小图的高度（或短边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
注意：小图的高度会影响最终大图的高度，大图的高度最大为15000像素，其中大图的高度为小图行数与小图高度的乘积。
 * @method void setHeight(integer $Height) 设置雪碧图中小图的高度（或短边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
注意：小图的高度会影响最终大图的高度，大图的高度最大为15000像素，其中大图的高度为小图行数与小图高度的乘积。
 * @method string getResolutionAdaptive() 获取分辨率自适应，可选值：
<li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li>
<li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>
默认值：open。
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) 设置分辨率自适应，可选值：
<li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li>
<li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>
默认值：open。
 * @method string getFormat() 获取图片格式，取值：
<li> jpg：jpg 格式；</li>
<li> png：png 格式；</li>
<li> webp：webp 格式。</li>
默认值：jpg。
 * @method void setFormat(string $Format) 设置图片格式，取值：
<li> jpg：jpg 格式；</li>
<li> png：png 格式；</li>
<li> webp：webp 格式。</li>
默认值：jpg。
 */
class CreateImageSpriteTemplateRequest extends AbstractModel
{
    /**
     * @var string 采样类型，取值：
<li>Percent：按百分比。</li>
<li>Time：按时间间隔。</li>
     */
    public $SampleType;

    /**
     * @var integer 采样间隔。
<li>当 SampleType 为 Percent 时，指定采样间隔的百分比。</li>
<li>当 SampleType 为 Time 时，指定采样间隔的时间，单位为秒。</li>
     */
    public $SampleInterval;

    /**
     * @var integer 雪碧图中小图的行数。
注意：小图的行数会影响最终大图的高度，大图的高度最大为15000像素，其中大图的高度为小图行数与小图高度的乘积。
     */
    public $RowCount;

    /**
     * @var integer 雪碧图中小图的列数。
注意：小图的列数会影响最终大图的宽度，大图的宽度最大为15000像素，其中大图的宽度为小图列数与小图宽度的乘积。
     */
    public $ColumnCount;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 雪碧图模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var string 填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：
<li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li>
<li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li>
默认值：black 。
     */
    public $FillType;

    /**
     * @var integer 雪碧图中小图的宽度（或长边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
注意：小图的宽度会影响最终大图的宽度，大图的宽度最大为15000像素，其中大图的宽度为小图列数与小图宽度的乘积。
     */
    public $Width;

    /**
     * @var integer 雪碧图中小图的高度（或短边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
注意：小图的高度会影响最终大图的高度，大图的高度最大为15000像素，其中大图的高度为小图行数与小图高度的乘积。
     */
    public $Height;

    /**
     * @var string 分辨率自适应，可选值：
<li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li>
<li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>
默认值：open。
     */
    public $ResolutionAdaptive;

    /**
     * @var string 图片格式，取值：
<li> jpg：jpg 格式；</li>
<li> png：png 格式；</li>
<li> webp：webp 格式。</li>
默认值：jpg。
     */
    public $Format;

    /**
     * @param string $SampleType 采样类型，取值：
<li>Percent：按百分比。</li>
<li>Time：按时间间隔。</li>
     * @param integer $SampleInterval 采样间隔。
<li>当 SampleType 为 Percent 时，指定采样间隔的百分比。</li>
<li>当 SampleType 为 Time 时，指定采样间隔的时间，单位为秒。</li>
     * @param integer $RowCount 雪碧图中小图的行数。
注意：小图的行数会影响最终大图的高度，大图的高度最大为15000像素，其中大图的高度为小图行数与小图高度的乘积。
     * @param integer $ColumnCount 雪碧图中小图的列数。
注意：小图的列数会影响最终大图的宽度，大图的宽度最大为15000像素，其中大图的宽度为小图列数与小图宽度的乘积。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $Name 雪碧图模板名称，长度限制：64 个字符。
     * @param string $Comment 模板描述信息，长度限制：256 个字符。
     * @param string $FillType 填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：
<li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li>
<li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li>
默认值：black 。
     * @param integer $Width 雪碧图中小图的宽度（或长边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
注意：小图的宽度会影响最终大图的宽度，大图的宽度最大为15000像素，其中大图的宽度为小图列数与小图宽度的乘积。
     * @param integer $Height 雪碧图中小图的高度（或短边）的最大值，取值范围：0 和 [128, 4096]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
注意：小图的高度会影响最终大图的高度，大图的高度最大为15000像素，其中大图的高度为小图行数与小图高度的乘积。
     * @param string $ResolutionAdaptive 分辨率自适应，可选值：
<li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li>
<li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>
默认值：open。
     * @param string $Format 图片格式，取值：
<li> jpg：jpg 格式；</li>
<li> png：png 格式；</li>
<li> webp：webp 格式。</li>
默认值：jpg。
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
        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = $param["SampleType"];
        }

        if (array_key_exists("SampleInterval",$param) and $param["SampleInterval"] !== null) {
            $this->SampleInterval = $param["SampleInterval"];
        }

        if (array_key_exists("RowCount",$param) and $param["RowCount"] !== null) {
            $this->RowCount = $param["RowCount"];
        }

        if (array_key_exists("ColumnCount",$param) and $param["ColumnCount"] !== null) {
            $this->ColumnCount = $param["ColumnCount"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("ResolutionAdaptive",$param) and $param["ResolutionAdaptive"] !== null) {
            $this->ResolutionAdaptive = $param["ResolutionAdaptive"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
