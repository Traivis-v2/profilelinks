<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Ammar Hussein</title>
<meta name="robots" content="index, follow" />
<style>
*{box-sizing:border-box;margin:0;padding:0;}
body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;background:#f5f4fb;min-height:100vh;}
:root{--p50:#EEEDFE;--p100:#CECBF6;--p200:#AFA9EC;--p400:#7F77DD;--p600:#534AB7;--p800:#3C3489;--p900:#26215C;--white:#ffffff;--border:#e2e0f5;--muted:#6b6590;}
.page{max-width:480px;margin:0 auto;background:var(--white);min-height:100vh;}
.banner-wrap{position:relative;width:100%;height:150px;background:linear-gradient(135deg,var(--p800),var(--p400));overflow:hidden;}
.banner-wrap img{width:100%;height:100%;object-fit:cover;display:block;}
.banner-overlay{position:absolute;inset:0;background:rgba(30,10,80,0.15);}
.profile-section{display:flex;flex-direction:column;align-items:center;margin-top:-46px;position:relative;z-index:2;padding:0 16px 14px;}
.avatar-circle{width:92px;height:92px;border-radius:50%;border:4px solid var(--white);background:var(--p100);display:flex;align-items:center;justify-content:center;font-size:32px;color:var(--p600);overflow:hidden;}
.avatar-circle img{width:100%;height:100%;object-fit:cover;border-radius:50%;}
.profile-name{font-size:20px;font-weight:600;color:var(--p900);margin-top:10px;text-align:center;}
.profile-sub{font-size:14px;color:var(--p600);margin-top:3px;text-align:center;}
.socials-row{display:flex;gap:12px;justify-content:center;padding:10px 16px 18px;flex-wrap:wrap;}
.soc-icon{width:42px;height:42px;border-radius:50%;background:var(--p600);display:flex;align-items:center;justify-content:center;text-decoration:none;transition:background 0.15s;flex-shrink:0;}
.soc-icon:hover{background:var(--p800);}
.soc-icon svg{width:20px;height:20px;}
.featured-card{margin:0 14px 14px;border:2.5px solid var(--p400);border-radius:16px;overflow:visible;background:var(--p50);position:relative;}
.feat-thumb-wrap{position:relative;border-radius:13px 13px 0 0;overflow:hidden;cursor:pointer;}
.feat-thumb-wrap img{width:100%;aspect-ratio:16/9;object-fit:cover;display:block;}
.feat-thumb-placeholder{width:100%;aspect-ratio:16/9;background:var(--p200);display:flex;align-items:center;justify-content:center;}
.play-overlay{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;background:rgba(0,0,0,0.12);opacity:0;transition:opacity 0.2s;}
.feat-thumb-wrap:hover .play-overlay{opacity:1;}
.play-circle{width:52px;height:52px;border-radius:50%;background:rgba(255,255,255,0.92);display:flex;align-items:center;justify-content:center;}
.feat-info{padding:11px 14px 13px;position:relative;}
.feat-title{font-size:14px;font-weight:600;color:var(--p900);direction:rtl;line-height:1.5;padding-left:30px;}
.feat-desc{font-size:12px;color:var(--p600);margin-top:5px;direction:rtl;line-height:1.5;}
.dots-btn{position:absolute;top:8px;left:10px;background:none;border:none;cursor:pointer;color:var(--p600);font-size:22px;line-height:1;padding:2px 6px;border-radius:6px;}
.dots-btn:hover{background:var(--p100);}
.dots-menu{position:absolute;top:34px;left:6px;background:var(--white);border:1px solid var(--border);border-radius:12px;padding:6px;z-index:100;min-width:170px;display:none;box-shadow:0 6px 20px rgba(83,74,183,0.15);}
.dots-menu.open{display:block;}
.dots-menu a{display:flex;align-items:center;gap:9px;padding:8px 11px;border-radius:8px;text-decoration:none;font-size:13px;color:var(--p800);white-space:nowrap;}
.dots-menu a:hover{background:var(--p50);}
.dots-menu svg{width:15px;height:15px;fill:none;stroke:var(--p600);stroke-width:2;flex-shrink:0;}
.links-list{padding:0 14px 36px;display:flex;flex-direction:column;gap:9px;}
.link-row-wrap{position:relative;}
.link-row{display:flex;align-items:center;gap:10px;background:var(--p600);border-radius:13px;padding:9px 10px 9px 13px;text-decoration:none;transition:background 0.15s;}
.link-row:hover{background:var(--p800);}
.link-thumb{width:44px;height:44px;border-radius:9px;background:var(--p400);flex-shrink:0;overflow:hidden;display:flex;align-items:center;justify-content:center;}
.link-thumb img{width:100%;height:100%;object-fit:cover;}
.link-label{flex:1;font-size:13px;color:white;direction:rtl;text-align:right;line-height:1.4;font-weight:500;}
.link-dots-btn{background:none;border:none;cursor:pointer;color:white;font-size:20px;padding:2px 6px;opacity:0.75;flex-shrink:0;border-radius:6px;}
.link-dots-btn:hover{opacity:1;background:rgba(255,255,255,0.15);}
.link-dots-menu{position:absolute;top:32px;right:0;background:var(--white);border:1px solid var(--border);border-radius:12px;padding:6px;z-index:100;min-width:170px;display:none;box-shadow:0 6px 20px rgba(83,74,183,0.15);}
.link-dots-menu.open{display:block;}
.link-dots-menu a{display:flex;align-items:center;gap:9px;padding:8px 11px;border-radius:8px;text-decoration:none;font-size:13px;color:var(--p800);white-space:nowrap;}
.link-dots-menu a:hover{background:var(--p50);}
.link-dots-menu svg{width:15px;height:15px;fill:none;stroke:var(--p600);stroke-width:2;flex-shrink:0;}
.toast{position:fixed;bottom:24px;left:50%;transform:translateX(-50%);background:var(--p800);color:white;padding:9px 22px;border-radius:22px;font-size:13px;opacity:0;transition:opacity 0.3s;pointer-events:none;z-index:999;white-space:nowrap;}
.toast.show{opacity:1;}
</style>
</head>
<body>
<div class="page">
  <div class="banner-wrap" id="banner-wrap">
    <img id="banner-img" src="" alt="" style="display:none;"/>
    <div class="banner-overlay"></div>
  </div>
  <div class="profile-section">
    <div class="avatar-circle">
      <img id="avatar-img" src="" alt="" style="display:none;"/>
      <span id="avatar-ph">✦</span>
    </div>
    <div class="profile-name" id="pub-name">Ammar Hussein</div>
    <div class="profile-sub" id="pub-sub"></div>
  </div>
  <div class="socials-row" id="pub-socials"></div>
  <div id="pub-featured"></div>
  <div class="links-list" id="pub-links"></div>
</div>
<div class="toast" id="toast"></div>
<script>
const svgs={
  facebook:`<svg viewBox="0 0 24 24" fill="white" width="20" height="20"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>`,
  instagram:`<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="20" height="20"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><circle cx="12" cy="12" r="4.5"/><circle cx="17.5" cy="6.5" r="0.8" fill="white" stroke="none"/></svg>`,
  x:`<svg viewBox="0 0 24 24" fill="white" width="20" height="20"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>`,
  telegram:`<svg viewBox="0 0 24 24" fill="white" width="20" height="20"><path d="M21.198 2.433a2.242 2.242 0 0 0-1.022.215l-16.5 7a2.25 2.25 0 0 0 .4 4.298l3.924.701 2.358 6.537c.29.808 1.283 1.073 1.97.529L15.17 19.5l3.368 2.695c.654.524 1.624.269 1.94-.512l3.878-14.5a2.242 2.242 0 0 0-3.158-2.75z"/></svg>`,
  youtube:`<svg viewBox="0 0 24 24" fill="white" width="20" height="20"><path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z"/></svg>`,
  podcast:`<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" width="20" height="20"><circle cx="12" cy="11" r="3" fill="white" stroke="none"/><path d="M6.37 17.37A8 8 0 1 1 17.63 17.37"/><line x1="12" y1="21" x2="12" y2="14"/></svg>`,
  spotify:`<svg viewBox="0 0 24 24" width="20" height="20"><circle cx="12" cy="12" r="10" fill="white"/><path d="M8 13.5c2.5-1 5.5-.5 7.5 1" fill="none" stroke="#534AB7" stroke-width="1.5" stroke-linecap="round"/><path d="M7.5 10.5c3-1.2 7-.8 9.5 1.5" fill="none" stroke="#534AB7" stroke-width="1.5" stroke-linecap="round"/><path d="M7 7.5c3.5-1.5 8.5-.8 11 2" fill="none" stroke="#534AB7" stroke-width="1.5" stroke-linecap="round"/></svg>`,
  soundcloud:`<svg viewBox="0 0 24 24" fill="white" width="20" height="20"><path d="M2 15a2 2 0 0 0 2 2h14a4 4 0 0 0 0-8 4.7 4.7 0 0 0-.5 0A5 5 0 0 0 8 12a2.5 2.5 0 0 0-2.5 1A2 2 0 0 0 2 15z"/></svg>`
};
const socialDefs=[
  {id:"facebook",label:"Facebook"},{id:"instagram",label:"Instagram"},
  {id:"x",label:"X"},{id:"telegram",label:"Telegram"},
  {id:"youtube",label:"YouTube"},{id:"podcast",label:"Podcast"},
  {id:"spotify",label:"Spotify"},{id:"soundcloud",label:"SoundCloud"}
];

function showToast(msg){const t=document.getElementById("toast");t.textContent=msg;t.classList.add("show");setTimeout(()=>t.classList.remove("show"),2500);}
function toggleDotsMenu(id,e){e.stopPropagation();document.querySelectorAll(".dots-menu,.link-dots-menu").forEach(m=>{if(m.id!==id)m.classList.remove("open");});document.getElementById(id).classList.toggle("open");}
function copyLink(url,e){e.preventDefault();e.stopPropagation();if(navigator.clipboard)navigator.clipboard.writeText(url);showToast("Link copied ✓");document.querySelectorAll(".dots-menu,.link-dots-menu").forEach(m=>m.classList.remove("open"));}
document.addEventListener("click",()=>{document.querySelectorAll(".dots-menu,.link-dots-menu").forEach(m=>m.classList.remove("open"));});

async function loadAndRender(){
  let state;
  try{
    const res=await fetch('/api/load');
    state=await res.json();
  }catch(e){ return; }

  document.title = state.name ? state.name + ' - لينك تري' : 'Ammar Hussein';
  document.getElementById("pub-name").textContent=state.name||"Ammar Hussein";
  document.getElementById("pub-sub").textContent=state.sub||"";

  const bImg=document.getElementById("banner-img");
  if(state.banner){bImg.src=state.banner;bImg.style.display="block";}

  const aImg=document.getElementById("avatar-img");
  const aPh=document.getElementById("avatar-ph");
  if(state.avatar){aImg.src=state.avatar;aImg.style.display="block";aPh.style.display="none";}

  const sc=document.getElementById("pub-socials");
  sc.innerHTML="";
  socialDefs.forEach(s=>{
    if(!state.socials||!state.socials[s.id])return;
    const a=document.createElement("a");
    a.className="soc-icon";a.href=state.socials[s.id];a.title=s.label;a.target="_blank";
    a.innerHTML=svgs[s.id]||"";sc.appendChild(a);
  });

  const fw=document.getElementById("pub-featured");
  fw.innerHTML="";
  if(state.video&&(state.video.title||state.video.thumb)){
    const vl=state.video.link||"#";
    const card=document.createElement("div");
    card.className="featured-card";
    const th=state.video.thumb?`<img src="${state.video.thumb}" alt=""/>`:`<div class="feat-thumb-placeholder"><svg viewBox="0 0 24 24" width="44" height="44"><path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z" fill="#534AB7"/></svg></div>`;
    card.innerHTML=`<div class="feat-thumb-wrap" onclick="window.open('${vl}','_blank')">${th}<div class="play-overlay"><div class="play-circle"><svg viewBox="0 0 24 24" width="20" height="20"><polygon points="5 3 19 12 5 21 5 3" fill="#534AB7"/></svg></div></div></div><div class="feat-info"><button class="dots-btn" onclick="toggleDotsMenu('feat-menu',event)">⋯</button><div class="dots-menu" id="feat-menu" onclick="event.stopPropagation()"><a href="${vl}" target="_blank"><svg viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>Open original</a><a href="#" onclick="copyLink('${vl}',event)"><svg viewBox="0 0 24 24"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>Copy link</a></div><div class="feat-title">${state.video.title}</div>${state.video.desc?`<div class="feat-desc">${state.video.desc}</div>`:""}</div>`;
    fw.appendChild(card);
  }

  const pl=document.getElementById("pub-links");
  pl.innerHTML="";
  (state.links||[]).forEach((l,idx)=>{
    if(!l.label&&!l.url)return;
    const lnk=l.url||"#";
    const wrap=document.createElement("div");
    wrap.className="link-row-wrap";
    wrap.innerHTML=`<a class="link-row" href="${lnk}" target="_blank" onclick="event.stopPropagation()"><div class="link-thumb">${l.thumb?`<img src="${l.thumb}" alt=""/>`:`<svg viewBox="0 0 24 24" width="20" height="20"><path d="M19 4H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z" fill="white" opacity="0.5"/></svg>`}</div><div class="link-label">${l.label}</div><button class="link-dots-btn" onclick="toggleDotsMenu('lm-${idx}',event)">⋯</button></a><div class="link-dots-menu" id="lm-${idx}" onclick="event.stopPropagation()"><a href="${lnk}" target="_blank"><svg viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>Open original</a><a href="#" onclick="copyLink('${lnk}',event)"><svg viewBox="0 0 24 24"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>Copy link</a></div>`;
    pl.appendChild(wrap);
  });
}
loadAndRender();
</script>
</body>
</html>
