<?php
require_once('common.php');
$id1 = $_GET["id1"];
$id2 = $_GET["id2"];
$id3 = $_GET["id3"];
$id4 = $_GET["id4"];

$name1 = getDB1('select Name from Characters where id=?',[$id1]);
$name2 = getDB1('select Name from Characters where id=?',[$id2]);
$name3 = getDB1('select Name from Characters where id=?',[$id3]);
$name4 = getDB1('select Name from Characters where id=?',[$id4]);

$image1 = getDB1('select Image from Characters where id=?',[$id1]);
$image2 = getDB1('select Image from Characters where id=?',[$id2]);
$image3 = getDB1('select Image from Characters where id=?',[$id3]);
$image4 = getDB1('select Image from Characters where id=?',[$id4]);

$hp1 = getDB1('select Hp from Characters where id=?',[$id1]);
$hp2 = getDB1('select Hp from Characters where id=?',[$id2]);
$hp3 = getDB1('select Hp from Characters where id=?',[$id3]);
$hp4 = getDB1('select Hp from Characters where id=?',[$id4]);

$power1 = getDB1('select Power from Characters where id=?',[$id1]);
$power2 = getDB1('select Power from Characters where id=?',[$id2]);
$power3 = getDB1('select Power from Characters where id=?',[$id3]);
$power4 = getDB1('select Power from Characters where id=?',[$id4]);

$Skill1ID1 = getDB1('select Skill1ID from Characters where id=?',[$id1]);
$Skill1Image1 = getDB1('select Skill1Image from Characters where id=?',[$id1]);
$Skill2ID1 = getDB1('select Skill2ID from Characters where id=?',[$id1]);
$Skill2Image1 = getDB1('select Skill2Image from Characters where id=?',[$id1]);
$Skill3ID1 = getDB1('select Skill3ID from Characters where id=?',[$id1]);
$Skill3Image1 = getDB1('select Skill3Image from Characters where id=?',[$id1]);

$Skill1ID2 = getDB1('select Skill1ID from Characters where id=?',[$id2]);
$Skill1Image2 = getDB1('select Skill1Image from Characters where id=?',[$id2]);
$Skill2ID2 = getDB1('select Skill2ID from Characters where id=?',[$id2]);
$Skill2Image2 = getDB1('select Skill2Image from Characters where id=?',[$id2]);
$Skill3ID2 = getDB1('select Skill3ID from Characters where id=?',[$id2]);
$Skill3Image2 = getDB1('select Skill3Image from Characters where id=?',[$id2]);

$Skill1ID3 = getDB1('select Skill1ID from Characters where id=?',[$id3]);
$Skill1Image3 = getDB1('select Skill1Image from Characters where id=?',[$id3]);
$Skill2ID3 = getDB1('select Skill2ID from Characters where id=?',[$id3]);
$Skill2Image3 = getDB1('select Skill2Image from Characters where id=?',[$id3]);
$Skill3ID3 = getDB1('select Skill3ID from Characters where id=?',[$id3]);
$Skill3Image3 = getDB1('select Skill3Image from Characters where id=?',[$id3]);

$Skill1ID4 = getDB1('select Skill1ID from Characters where id=?',[$id4]);
$Skill1Image4 = getDB1('select Skill1Image from Characters where id=?',[$id4]);
$Skill2ID4 = getDB1('select Skill2ID from Characters where id=?',[$id4]);
$Skill2Image4 = getDB1('select Skill2Image from Characters where id=?',[$id4]);
$Skill3ID4 = getDB1('select Skill3ID from Characters where id=?',[$id4]);
$Skill3Image4 = getDB1('select Skill3Image from Characters where id=?',[$id4]);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>バトル</title>

    <!--<link rel="stylesheet" href="./css/style.css">-->
<script src="script/jquery-3.1.1.min.js"></script>
</head>
<body><div class="audio_wrap">
  <div class="audio_button"></div>
  <audio id="audio" src="./Music/bgm_maoudamashii_fantasy12.mp3" autoplay loop>
  </audio>
</div>
    <div id="EnenyName" class="EnemyName">
        <h1>アルティメットバハムート</h1>
    </div>
    <hr id="HPBar" class="HPBar" width="600px" align="left" />
    <h1 href="#" class="HP">
        HP:
        <h1 id="HP" class="HP">
            11000
        </h1>
		<div id="Debuff">
		</div>
		<h1 id="EnDamege" class="EnDamege">0</h1>
    </h1>
    <div id="texture" class="texture">
        <div id="EnemyImage" class="EnemyImage">
            <img src="assets/UltimateBahamut.png">
            <input type="hidden" name="EnemyAttack" value="500" id="EnemyAttack" class="EnemyAttack">
            <input type="hidden" name="EnemyDefence" value="100" id="EnemyDefence" class="EnemyDefence">
        </div>
        <div id="CharactersImage1" class="CharactersImage">
            <h1 id="Char1HPBar" class="CharHPBar">HP:</h1>
            <h1 id="Char1HP" class="CharHP"><?= $hp1['Hp'] ?></h1>
            <input type="hidden" name="Char1Attack" value="<?= $power1['Power'] ?>" id="Char1Attack" class="CharAttack">
            <input type="hidden" name="Char1Defence" value="100" id="Char1Defence" class="CharDefence">
            <input type="Image" src="assets/<?= $image1['Image'] ?>">
            <img src="assets/<?= $Skill1Image1['Skill1Image'] ?>"onclick="Skill(<?=$Skill1ID1['Skill1ID'] ?>, '0','0')">
            <img src="assets/<?= $Skill2Image1['Skill2Image'] ?>"onclick="Skill(<?=$Skill2ID1['Skill2ID'] ?>, '0','1')">
            <img src="assets/<?= $Skill3Image1['Skill3Image'] ?>"onclick="Skill(<?=$Skill3ID1['Skill3ID'] ?>, '0','2')">
			<div id="buffID1">

			</div>
        </div>
        <div id="CharactersImage2" class="CharactersImage">
            <h1 id="Char2HPBar" class="CharHPBar">HP:</h1>
            <h1 id="Char2HP" class="CharHP"><?= $hp2['Hp'] ?></h1>
            <input type="hidden" name="Char2Attack" value="<?= $power2['Power'] ?>" id="Char2Attack" class="CharAttack">
            <input type="hidden" name="Char2Defence" value="100" id="Char2Defence" class="CharDefence">
            <img src="assets/<?= $image2['Image'] ?>">
            <img src="assets/<?= $Skill1Image2['Skill1Image'] ?>"onclick="Skill(<?=$Skill1ID2['Skill1ID'] ?>, '1','0')">
            <img src="assets/<?= $Skill2Image2['Skill2Image'] ?>"onclick="Skill(<?=$Skill2ID2['Skill2ID'] ?>, '1','1')">
            <img src="assets/<?= $Skill3Image2['Skill3Image'] ?>"onclick="Skill(<?=$Skill3ID2['Skill3ID'] ?>, '1','2')">
			<div id="buffID2">

			</div>
        </div>
        <div id="CharactersImage3" class="CharactersImage">
            <h1 id="Char3HPBar" class="CharHPBar">HP:</h1>
            <h1 id="Char3HP" class="CharHP"><?= $hp3['Hp'] ?></h1>
            <input type="hidden" name="Char3Attack" value="<?= $power3['Power'] ?>" id="Char3Attack" class="CharAttack">
            <input type="hidden" name="Char3Defence" value="100" id="Char3Defence" class="CharDefence">
            <img src="assets/<?= $image3['Image'] ?>">
            <img src="assets/<?= $Skill1Image3['Skill1Image'] ?>"onclick="Skill(<?=$Skill1ID3['Skill1ID'] ?>, '2','0')">
            <img src="assets/<?= $Skill2Image3['Skill2Image'] ?>"onclick="Skill(<?=$Skill2ID3['Skill2ID'] ?>, '2','1')">
            <img src="assets/<?= $Skill3Image3['Skill3Image'] ?>"onclick="Skill(<?=$Skill3ID3['Skill3ID'] ?>, '2','2')">
			<div id="buffID3">

			</div>
        </div>
        <div id="CharactersImage4" class="CharactersImage">
            <h1 id="Char4HPBar" class="CharHPBar">HP:</h1>
            <h1 id="Char4HP" class="CharHP"><?= $hp4['Hp'] ?></h1>
            <input type="hidden" name="Char4Attack" value="<?= $power4['Power'] ?>" id="Char4Attack" class="CharAttack">
            <input type="hidden" name="Char4Defence" value="100" id="Char4Defence" class="CharDefence">
            <img src="assets/<?= $image4['Image'] ?>">
            <img src="assets/<?= $Skill1Image4['Skill1Image'] ?>"onclick="Skill(<?=$Skill1ID4['Skill1ID'] ?>, '3','0')">
            <img src="assets/<?= $Skill2Image4['Skill2Image'] ?>"onclick="Skill(<?=$Skill2ID4['Skill2ID'] ?>, '3','1')">
            <img src="assets/<?= $Skill3Image4['Skill3Image'] ?>"onclick="Skill(<?=$Skill3ID4['Skill3ID'] ?>, '3','2')">
			<div id="buffID4">

			</div>
        </div>
    </div>
    <div>
        <button id="Attack" class="Attack" onclick="hp_down()">攻撃</button>
    </div>
    <div id="Characters" class="Characters">
    </div>

    <!--//////////-->
    <!--Javascript-->
    <!--//////////-->
    <script type="text/javascript">    
	$(function () {
  var audioBtn = $('.audio_button'),
  audioWrap = $('.audio_wrap'),
  audio = document.getElementById('audio');

  audioBtn.on('click', function () {
    if( audioWrap.hasClass('play') ) {
        audio.play();
      audioWrap.removeClass('play');
    } else {
        audio.pause();
      audioWrap.addClass('play');
    }
  });
});
        var enemyHP = document.getElementById('HP')
		var enemyMaxHP = 11000;
        var enemyAttack = document.getElementById('EnemyAttack')
        var EnemyDefence = document.getElementById('EnemyDefence')

        var Char1Attack = document.getElementById('Char1Attack')
        var Char2Attack = document.getElementById('Char2Attack')
        var Char3Attack = document.getElementById('Char3Attack')
        var Char4Attack = document.getElementById('Char4Attack')

        var Char1HP = document.getElementById('Char1HP')
        var Char2HP = document.getElementById('Char2HP')
        var Char3HP = document.getElementById('Char3HP')
        var Char4HP = document.getElementById('Char4HP')

        var Char1Defence = document.getElementById('Char1Defence')
        var Char2Defence = document.getElementById('Char2Defence')
        var Char3Defence = document.getElementById('Char3Defence')
        var Char4Defence = document.getElementById('Char4Defence')

        var CharHPArray = [Char1HP, Char2HP, Char3HP, Char4HP];
        var m_charHPArray = [Char1HP, Char2HP, Char3HP, Char4HP];
        var CharAttackArray = [Char1Attack, Char2Attack, Char3Attack, Char4Attack]
        var CharDefenceArray = [Char1Defence, Char2Defence, Char3Defence, Char4Defence] 
        

        function hp_down() {
            var Char1Power = parseFloat((Char1Attack.value) * ((AlimitBuff[0])/100)+1) + Math.round(parseFloat(Char1Attack.value / 100) * (Math.random() * 2 - 1));
            var Char2Power = parseFloat((Char2Attack.value) * ((AlimitBuff[1])/100)+1) + Math.round(parseFloat(Char2Attack.value / 100) * (Math.random() * 2 - 1));
            var Char3Power = parseFloat((Char3Attack.value) * ((AlimitBuff[2])/100)+1) + Math.round(parseFloat(Char3Attack.value / 100) * (Math.random() * 2 - 1));
            var Char4Power = parseFloat((Char4Attack.value) * ((AlimitBuff[3])/100)+1) + Math.round(parseFloat(Char4Attack.value / 100) * (Math.random() * 2 - 1));

            var enemyPower = parseFloat(enemyAttack.value) + Math.round(parseFloat(enemyAttack.value / 100) * (Math.random() * 2 - 1));
			enemyPower = enemyPower * Math.round(parseFloat(AlimitDebuff) / 100);
            var allPower = 0;
            for (var i = 0; i < 4; i++) {
                if (CharHPArray[i].innerHTML > 0) {
                    allPower += parseFloat(CharAttackArray[i].value) * ((AlimitBuff[i]/100)+1) + Math.round(parseFloat(CharAttackArray[i].value / 100) * (Math.random() * 2 - 1));
                }
            }

            var fullpunch = Math.random() * 100;
            if (fullpunch < 5) {
                for (var i = 0; i < m_charHPArray.length; i++) {
                    m_charHPArray[i].innerHTML -= Math.round((enemyPower / 2) / (DlimitBuff[i] / 100));
                }
            }
            else {
                var rand = Math.random() * m_charHPArray.length;
				
                if (rand < 1) {
                    m_charHPArray[0].innerHTML -= Math.round(enemyPower / (DlimitBuff[0] / 100));
                }
                else if (rand < 2) {
                    m_charHPArray[1].innerHTML -= Math.round(enemyPower / (DlimitBuff[1] / 100));
                }
                else if (rand < 3) {
                    m_charHPArray[2].innerHTML -= Math.round(enemyPower / (DlimitBuff[2] / 100));
                }
                else if (rand < 4) {
                    m_charHPArray[3].innerHTML -= Math.round(enemyPower / (DlimitBuff[3] / 100));
                }
            }

            if (Char1HP.innerHTML <= 0) {
                Char1HP.innerHTML = 0;
                for (var i = 0; i < m_charHPArray.length; i++) {
                    if (m_charHPArray[i] == Char1HP) {
                        m_charHPArray.splice(i, 1);
						DlimitBuff.splice(i, 1);
                        break;
                    }
                }
                var CharactersImage1 = document.getElementById('CharactersImage1');
                CharactersImage1.style.backgroundColor = "#000";
                CharactersImage1.style.opacity = 0.6;
            }
            if (Char2HP.innerHTML <= 0) {
                Char2HP.innerHTML = 0;
                for (var i = 0; i < m_charHPArray.length; i++) {
                    if (m_charHPArray[i] == Char2HP) {
                        m_charHPArray.splice(i, 1);
						DlimitBuff.splice(i, 1);
                        break;
                    }
                }
                var CharactersImage2 = document.getElementById('CharactersImage2');
                CharactersImage2.style.backgroundColor = "#000";
                CharactersImage2.style.opacity = 0.6;
            }
            if (Char3HP.innerHTML <= 0) {
                Char3HP.innerHTML = 0;
                for (var i = 0; i < m_charHPArray.length; i++) {
                    if (m_charHPArray[i] == Char3HP) {
                        m_charHPArray.splice(i, 1);
						DlimitBuff.splice(i, 1);
                        break;
                    }
                }
                var CharactersImage3 = document.getElementById('CharactersImage3');
                CharactersImage3.style.backgroundColor = "#000";
                CharactersImage3.style.opacity = 0.6;
            }
            if (Char4HP.innerHTML <= 0) {
                Char4HP.innerHTML = 0;
                for (var i = 0; i < m_charHPArray.length; i++) {
                    if (m_charHPArray[i] == Char4HP) {
                        m_charHPArray.splice(i, 1);
						DlimitBuff.splice(i, 1);
                        break;
                    }
                }
                var CharactersImage4 = document.getElementById('CharactersImage4');
                CharactersImage4.style.backgroundColor = "#000";
                CharactersImage4.style.opacity = 0.6;
            }
			
			var damage = Math.round(allPower * (100 / DlimitDebuff));
			DamageDisplay(damage);
            enemyHP.innerHTML -= damage;
			var HPBar = document.getElementById('HPBar');
			HPBar.width = (6 * Math.floor(parseFloat(enemyHP.innerHTML) / 110)) +"px";
            console.log((100 / DlimitDebuff));
            console.log(enemyPower / (DlimitBuff[0] / 100));
            if (enemyHP.innerHTML <= 0) {
                location.href = "./Result_Win.html";
            }
            else if (m_charHPArray.length <= 0) {
                location.href = "./Result_Lose.html";
            }
        }

		var AlimitBuff = [0,0,0,0];
		var DlimitBuff = [100,100,100,100];
		var AlimitDebuff = 100;
		var DlimitDebuff = 100;

		var IsABuffLimit = false;
		var IsDBuffLimit = false;

		var EnDamege = document.getElementById('EnDamege');

		function DamageHidden(){
				EnDamege.style.visibility = 'hidden';
				EnDamege.innerHTML=0;
		}
		function DamageDisplay(Damage){
			if(Damage != 0){
				console.log(EnDamege);
				EnDamege.style.visibility = 'visible';
				EnDamege.innerHTML=Damage;
		
				setTimeout("DamageHidden()", 350);
			}
		}

        function Char1Skill(Damege, attackBuff, defenceBuff, attackDebuff, defenceDebuff, CharNum) {
			DamageDisplay(Damege);
            enemyHP.innerHTML -= parseFloat(Damege);
			if (enemyHP.innerHTML <= 0) {
                location.href = "./Result_Win.html";
            }
			AlimitBuff[CharNum] += parseFloat(attackBuff);
			DlimitBuff[CharNum] += parseFloat(defenceBuff);
            AlimitDebuff -= parseFloat(attackDebuff);
			DlimitDebuff -= parseFloat(defenceDebuff);
			if(AlimitDebuff < 50){
				AlimitDebuff = 50;
				IsABuffLimit = true;
			}
			if(DlimitDebuff < 50){
				DlimitDebuff = 50;
				IsDBuffLimit = true;
			}
			console.log(AlimitBuff);
			console.log(DlimitBuff);
            console.log("キャラ:" + CharNum + ", ダメージ:" + Damege + ", 攻撃力:" + AlimitBuff[CharNum] + ", 防御力:" + DlimitBuff[CharNum] + ", 攻撃デバフ:" + AlimitDebuff + ", 防御デバフ:" + DlimitDebuff);
        }
        function Char1SkillAll(Damege, attackBuff, defenceBuff, attackDebuff, defenceDebuff) {
			DamageDisplay(Damege);
            enemyHP.innerHTML -= parseFloat(Damege);
			if (enemyHP.innerHTML <= 0) {
                location.href = "./Result_Win.html";
            }
            for (var i = 0; i < 4; i++) {
                AlimitBuff[i] += parseFloat(attackBuff);
			}
            for (var i = 0; i < 4; i++) {
                DlimitBuff[i] += parseFloat(defenceBuff);
            }
			AlimitDebuff -= parseFloat(attackDebuff);
			DlimitDebuff -= parseFloat(defenceDebuff);
			if(AlimitDebuff < 50){
				AlimitDebuff = 50;
				IsABuffLimit = true;
			}
			if(DlimitDebuff < 50){
				DlimitDebuff = 50;
				IsDBuffLimit = true;
			}
			console.log(AlimitBuff);
			console.log(DlimitBuff);
            console.log("全体	" + ", ダメージ:" + Damege + ", 攻撃力:" + AlimitBuff + ", 防御力:" + DlimitBuff + ", 攻撃デバフ:" + AlimitDebuff + ", 防御デバフ:" + DlimitDebuff);
		}

		var push_1 = false;
		var push_2 = false;
		var push_3 = false;
		var push_4 = false;
		var push_5 = false;
		var push_6 = false;
		var push_7 = false;
		var push_8 = false;
		var push_9 = false;
		var push_10 = false;
		var push_11 = false;
		var push_12 = false;

		var CharSkill = [[false,false,false],
						 [false,false,false],
						 [false,false,false],
						 [false,false,false]];

		function BuffIcon(buffID, pngName){
					var buff = document.createElement("img");
					buff.src="assets/"+pngName+".png";
					document.getElementById(buffID).appendChild(buff);
		}
		function AllBuffIcon(pngName){
					BuffIcon('buffID1', pngName);
					BuffIcon('buffID2', pngName);
					BuffIcon('buffID3', pngName);
					BuffIcon('buffID4', pngName);
		}
		function DebuffIcon(pngName){
					var buff = document.createElement("img");
					buff.src="assets/"+pngName+".png";
					document.getElementById('Debuff').appendChild(buff);
		}

		function Skill(id, CharNum, SkillNum){
			switch (id) {
				case 1:
				if(!CharSkill[CharNum][SkillNum]){
					Char1SkillAll(0,30,0,0,0);
					CharSkill[CharNum][SkillNum] = true;
					AllBuffIcon('AttackUp');
					return;
				}
					break;
				case 2:
				if(!CharSkill[CharNum][SkillNum]){
					Char1Skill(0,0,0,25,25, CharNum);
					CharSkill[CharNum][SkillNum] = true;
					if(!IsABuffLimit){
						DebuffIcon('AttackDown');
					}if(!IsDBuffLimit){
						DebuffIcon('DefenceDown');
					}
					return;
				}
					break;
				case 3:
				if(!CharSkill[CharNum][SkillNum]){
					Char1Skill(800,0,0,0,25, CharNum);
					CharSkill[CharNum][SkillNum] = true;
					if(!IsDBuffLimit){
						DebuffIcon('DefenceDown');
					}
					return;
				}
					break;
				case 4:
				if(!CharSkill[CharNum][SkillNum]){
					Char1SkillAll(0,0,30,0,0);
					CharSkill[CharNum][SkillNum] = true;
					AllBuffIcon('DefenceUp');
					return;
				}
					break;
				case 5:
				if(!CharSkill[CharNum][SkillNum]){
					Char1SkillAll(0,30,0,0,0);
					CharSkill[CharNum][SkillNum] = true;
					AllBuffIcon('AttackUp');
					return;
				}
					break;
				case 6:
				if(!CharSkill[CharNum][SkillNum]){
					Char1SkillAll(0,0,30,0,0);
					CharSkill[CharNum][SkillNum] = true;
					AllBuffIcon('DefenceUp');
					return;
				}
					break;
				case 7:
				if(!CharSkill[CharNum][SkillNum]){
					Char1Skill(1000,0,0,0,0, CharNum);
					CharSkill[CharNum][SkillNum] = true;
					return;
				}
					break;
				case 8:
				if(!CharSkill[CharNum][SkillNum]){
					Char1Skill(0,50,0,0,0, CharNum);
					CharSkill[CharNum][SkillNum] = true;
					switch (CharNum) {
						case '0':
							BuffIcon('buffID1','AttackUp');
							break;
						case '1':
							BuffIcon('buffID2','AttackUp');
							break;
						case '2':
							console.log(CharNum+", "+SkillNum);
							BuffIcon('buffID3','AttackUp');
							break;
						case '3':
							BuffIcon('buffID4','AttackUp');
							break;
						default:
							break;
					}
					return;
				}
					break;
				case 9:
				if(!CharSkill[CharNum][SkillNum]){
					Char1Skill(1000,0,50,0,0, CharNum);
					CharSkill[CharNum][SkillNum] = true;switch (CharNum) {
						case '0':
							BuffIcon('buffID1','DefenceUp');
							break;
						case '1':
							BuffIcon('buffID2','DefenceUp');
							break;
						case '2':
							BuffIcon('buffID3','DefenceUp');
							break;
						case '3':
							BuffIcon('buffID4','DefenceUp');
							break;
						default:
							break;
					}
					return;
				}
					break;
				case 10:
				if(!CharSkill[CharNum][SkillNum]){
					Char1Skill(1000,15,0,0,0, CharNum);
					CharSkill[CharNum][SkillNum] = true;switch (CharNum) {
						case '0':
							BuffIcon('buffID1','AttackUp');
							break;
						case '1':
							BuffIcon('buffID2','AttackUp');
							break;
						case '2':
							console.log(CharNum+", "+SkillNum);
							BuffIcon('buffID3','AttackUp');
							break;
						case '3':
							BuffIcon('buffID4','AttackUp');
							break;
						default:
							break;
					}
					return;
				}
					break;
				case 11:
				if(!CharSkill[CharNum][SkillNum]){
					Char1Skill(0,0,0,25,25, CharNum);
					CharSkill[CharNum][SkillNum] = true;
					if(!IsABuffLimit){
						DebuffIcon('AttackDown');
					}if(!IsDBuffLimit){
						DebuffIcon('DefenceDown');
					}
					return;
				}
					break;
				case 12:
				if(!CharSkill[CharNum][SkillNum]){
					Char1Skill(0,0,50,0,0, CharNum);
					CharSkill[CharNum][SkillNum] = true;
					AllBuffIcon('DefenceUp');
					return;
				}
					break;
	
				default:
					Char1Skill(0,0,0,0,0, CharNum);
					break;
			}
		}
    </script>

    <!--/////-->
    <!--style-->
    <!--/////-->
    <style>    .play .audio_button {
    background-image: url(ガチャブル画像/♪surassyu.png);
}
    .audio_button {
    position: relative;
    width: 40px;
    height: 40px;
    margin-left:20px;
    margin-top:20px;
    background: url(ガチャブル画像/♪.png) no-repeat center center;
    background-size: contain;
}
        #EnenyName {
            text-align: center;
        }
		#EnDamege{
			color:red;
			visibility:hidden;
			position:absolute;
			top:200px;
			left:90px;
		}

        #HPBar {
			clear:both;
            margin-top: 1%;
            border: none;
            height: 10px;
            background: red;
        }
		#Debuff{
			position:absolute;
			top:210px;
			left: 240px;
		}
		#buffID1{
			position:absolute;
			top:70px;
			left: 290px;
		}#buffID2{
			position:absolute;
			top:70px;
			left: 290px;
		}#buffID3{
			position:absolute;
			top:70px;
			left: 290px;
		}#buffID4{
			position:absolute;
			top:70px;
			left: 290px;
		}


        #CharactersImage1 {
            background-color: none;
            opacity: 1;
            display: block;
            position: absolute;
            top: 0px;
            left: 600px;
        }

        .CharHPBar {
            position: absolute;
            left: 330px;
        }

        #Char1HP {
            position: absolute;
            left: 400px;
        }

        #CharactersImage2 {
            position: absolute;
            top: 180px;
            left: 600px;
        }

        #Char2HP {
            position: absolute;
            left: 400px;
        }

        #CharactersImage3 {
            position: absolute;
            top: 360px;
            left: 600px;
        }

        #Char3HP {
            position: absolute;
            left: 400px;
        }

        #CharactersImage4 {
            position: absolute;
            top: 540px;
            left: 600px;
        }

        #Char4HP {
            position: absolute;
            left: 400px;
        }

        .CharactersImage {
            position: relative;
            padding: 0.25em 1em;
            margin: 2em 0;
            top: 0;
            background: #efefef;
        }

            .CharactersImage:before, .CharactersImage:after {
                position: absolute;
                top: 0;
                content: '';
                width: 10px;
                height: 100%;
                display: inline-block;
                box-sizing: border-box;
            }

            .CharactersImage:before {
                border-left: dotted 2px #15adc1;
                border-top: dotted 2px #15adc1;
                border-bottom: dotted 2px #15adc1;
                left: 0;
            }

            .CharactersImage:after {
                border-top: dotted 2px #15adc1;
                border-right: dotted 2px #15adc1;
                border-bottom: dotted 2px #15adc1;
                right: 0;
            }

            .CharactersImage p {
                margin: 0;
                padding: 0;
            }

        .HP {
            float: left;
        }

        #Attack {
			clear: both;
            display: inline-block;
            max-width: 180px;
            text-align: left;
            background-color: #ffa300;
            font-size: 16px;
            color: #FFF;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 24px;
            border-radius: 4px;
            border-bottom: 4px solid #d37800;
            position: absolute;
			top: 160px;
            left: 800px;
        }

        #texture {
            clear: both;
            position: relative;
        }
    </style>
</body>
</html>