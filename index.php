<!DOCTYPE html>
<html lang="zh_CN">
<head>
    <meta charset="utf-8" >
    <meta name="description" content="This is a program which calculate tank according to API620-2013" >
    <meta name="keyword" content="API620,tank,calculation,chinahualu" >
    <link rel="stylesheet" type="text/css" href="index.css" >
    <script src="index.js"></script>
    <title> HuaLu Tank Demo </title>
</head>

<body>
<div id="head">
    <div class="name" >
        <h1>HuaLu Tank </h1>
        <h2>——API620 计算程序 </h2>
    </div>

    <div class="navi">
        <ul>
            <li><a href="">登录</a></li>
            <li><a href="">帮助</a></li>
        </ul> 
    </div>

     <div class="clear">

    </div>

</div>

<div id="wrapper" >

    <div class="manu" >
        <ul>
            <li><a href="">新建</a></li>
            <li><a href="">打开</a></li>
            <li><a href="">保存</a></li>
            <li><a href=""><span>删除</span></a></li>
            <li><a href="">生成报告</a></li>
        </ul>
    </div>

    <div class="side">
        <div class="sidetitle">
            <h3>目录</h3>
        </div>

        <h3>总体:</h3>
        <ul>
            <li><a href="#tips">项目信息</a></li>
            <li><a href="">设计数据</a></li>
        </ul>

        <h3>筒体:</h3>
        <ul>
            <li><a href="">筒体数据</a></li>
        </ul>

        <h3>封头:</h3>
        <ul>
            <li><a href="">标准椭圆封头数据</a></li>
        </ul>

    </div>
    
    <div class="input">
        <div class="contanttitle">
            <div class="inputtitle">
                <h3>数据输入</h3>
            </div>
            <div class="filename">
                <h3>当前文件：T-150510</h3>
            </div>
             <div class="clear">
            </div>
    </div>
    <div class="data">
        <div class="datagroup">

            <div class="datagrouptitle">
                <h4>项目信息</h4>
            </div>
            <div class="lanmu1">
                <div class="datavalue">
                    <form>
                        <p>项目名称：<input type="text" maxlength="13" /></p>
                        <br />
                        <p>设备名称：<input type="text" maxlength="13" /></p>
                    </form>
                </div>
                <div class="clear">

                </div>
            </div>
            <div class="lanmu2">
                <div class="datavalue">
                    <form>
                        <p>装置代号：<input type="text" maxlength="13" /></p>
                        <br />
                        <p>设备位号：<input type="text" maxlength="13" /></p>
                    </form>
                </div>
                <div class="clear">

                </div>
            </div>
            <div class="clear">

                </div>
        </div>

        <div class="datagroup">

            <div class="datagrouptitle">
                <h4>设计数据</h4>
            </div>
            <div class="lanmu1">
                <div class="datavalue">
                    <form>
                        <p>设计压力(MPa)：<input id="DesignPressure"  type="text" style="ime-mode:disabled"  onblur="checkNum(this,0,35)" onKeyPress="inputNumZ(this)" onkeyup="checkCn(this)" /></p>
                    </form>
                </div>
                <div class="clear">

                </div>
            </div>
            <div class="lanmu2">
                <div class="datavalue">
                    <form>
                        <p>设计温度(℃)：<input id="DesignTemp"  type="text" style="ime-mode:disabled"  onblur="checkNum(this,-253,800)" onKeyPress="inputNumZF(this)" onkeyup="checkCn(this)" /></p>
                    </form>
                </div>
                <div class="clear">

                </div>
            </div>
            <div class="clear">

                </div>
        </div>

        <div class="datagroup">

            <div class="datagrouptitle">
                <h4>筒体数据</h4>
            </div>
            <div class="lanmu1">
                <div class="datavalue">
                    <form>
                        <p>筒体直径(mm)：<input id="ShellDiameter"  type="text" style="ime-mode:disabled"  onblur="checkNum(this,0,13000)" onKeyPress="inputNumZ(this)" onkeyup="checkCn(this)" /></p>
                        <br />
                        <p>筒体厚度(mm)：<input id="ShellThickness"  type="text" style="ime-mode:disabled"  onblur="checkNum(this,0,200)" onKeyPress="inputNumZ(this)" onkeyup="checkCn(this)" /></p>
                    </form>
                </div>
                <div class="clear">

                </div>
            </div>
            <div class="lanmu2">
                <div class="datavalue">
                    <form>
                        <p>筒体材料：<select name="material">
                                  <option value="Q345R">Q345R</option>
                                  <option value="15CrMoR">15CrMoR</option>
                                  <option value="S30408">S30408</option>
                                  </select>
                        </P>
                        <br />
                        <p>
                        许用应力(MPa)：<input type="text" readonly="readonly" s/>
                        </p>
                    </form>
                </div>
                <div class="clear">

                </div>
            </div>
            <div class="clear">

                </div>
        </div>

        <div class="datagroup">

            <div class="datagrouptitle">
                <h4>标准椭圆封头数据</h4>
                <a name="tips"></a>
            </div>
            <div class="lanmu1">
                <div class="datavalue">
                    <form>
                        <p>封头直径(mm)：<input id="HeadDiameter"  type="text" style="ime-mode:disabled"  onblur="checkNum(this,0,13000)" onKeyPress="inputNumZ(this)" onkeyup="checkCn(this)" /></p>
                        <br />
                        <p>封头厚度(mm)：<input id="HeadThickness"  type="text" style="ime-mode:disabled"  onblur="checkNum(this,0,200)" onKeyPress="inputNumZ(this)" onkeyup="checkCn(this)" /></p>
                    </form>
                </div>
                <div class="clear">

                </div>
            </div>
            <div class="lanmu2">
                <div class="datavalue">
                    <form>
                        <p>封头材料：<select name="material">
                                  <option value="Q345R">Q345R</option>
                                  <option value="15CrMoR">15CrMoR</option>
                                  <option value="S30408">S30408</option>
                                  </select>
                        </P>
                        <br />
                        <p>
                        许用应力(MPa)：<input type="text" readonly="readonly" />
                        </p>
                    </form>
                </div>
                <div class="clear">

                </div>
            </div>
            <div class="clear">

                </div>
        </div>

    </div>
    </div>

    <div class="clear">

    </div>
     
    </div>

<div id="footer">
    <div class="copy">
        <p>© 2015 HuaLuTank.com 版权所有</p>
    </div>
</div>

</body>



</html>
