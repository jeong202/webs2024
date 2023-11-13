// 얼굴 표정 랜덤으로 들어가기
const avataImages = [
    "AngrywithFang.svg",
    "Awe.svg",
    "Blank.svg",
    "Calm.svg",
    "Cheek.svg",
    "ConcernedFear.svg",
    "Concerned.svg",
    "Contempt.svg",
    "Cute.svg",
    "Cyclops.svg",
    "Driven.svg",
    "EatingHappy.svg",
    "Explaining.svg",
    "EyesClosed.svg",
    "Fear.svg",
    "Hectic.svg",
    "LovingGrin1.svg",
    "LovingGrin2.svg",
    "Monster.svg",
    "Old.svg",
    "Rage.svg",
    "Serious.svg",
    "SmileBig.svg",
    "SmileLOL.svg",
    "SmileTeeth Gap.svg",
    "Smile.svg",
    "Solemn.svg",
    "Suspicious.svg",
    "Tired.svg",
    "VeryAngry.svg",
    ]
const commentViews = document.querySelectorAll(".comment__view");
commentViews.forEach((view, i) => {
    const avata = view.querySelector(".avata");
    const rand = avataImages[Math.floor(Math.random() * (avataImages.length - 1))];
    
    console.log(rand);
    avata.style.backgroundImage = `url(../assets/face/${rand})`;
});
