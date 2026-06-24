<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Admin — Ammar Hussein</title>
<meta name="robots" content="noindex, nofollow"/>
<style>
*{box-sizing:border-box;margin:0;padding:0;}
body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;background:#f5f4fb;min-height:100vh;}
:root{--p50:#EEEDFE;--p100:#CECBF6;--p200:#AFA9EC;--p400:#7F77DD;--p600:#534AB7;--p800:#3C3489;--p900:#26215C;--white:#fff;--gray:#f5f4fb;--border:#e2e0f5;--text:#1a1535;--muted:#6b6590;}
.login-wrap{min-height:100vh;display:flex;align-items:center;justify-content:center;padding:24px;}
.login-box{background:var(--white);border:1px solid var(--border);border-radius:20px;padding:36px 28px;width:100%;max-width:360px;display:flex;flex-direction:column;align-items:center;gap:14px;}
.login-logo{width:68px;height:68px;border-radius:50%;background:var(--p600);display:flex;align-items:center;justify-content:center;font-size:28px;color:white;}
.login-box h1{font-size:22px;font-weight:700;color:var(--p900);}
.login-box p{font-size:13px;color:var(--muted);text-align:center;}
.login-box input{width:100%;padding:12px 16px;border:1.5px solid var(--p400);border-radius:12px;font-size:14px;text-align:center;color:var(--text);background:var(--gray);}
.login-box input:focus{outline:2px solid var(--p400);}
.login-btn{width:100%;padding:12px;background:var(--p600);color:white;border:none;border-radius:12px;font-size:14px;font-weight:600;cursor:pointer;}
.login-btn:hover{background:var(--p800);}
.login-err{font-size:12px;color:#c0392b;display:none;}
.panel{display:none;max-width:560px;margin:0 auto;background:var(--white);min-height:100vh;}
.top-bar{display:flex;align-items:center;justify-content:space-between;padding:14px 18px;border-bottom:1px solid var(--border);position:sticky;top:0;background:var(--white);z-index:10;}
.top-left{display:flex;align-items:center;gap:10px;}
.top-logo{width:36px;height:36px;border-radius:50%;background:var(--p600);display:flex;align-items:center;justify-content:center;font-size:16px;color:white;}
.top-title{font-size:16px;font-weight:700;color:var(--p900);}
.top-right{display:flex;gap:8px;}
.preview-btn{background:var(--p50);border:1.5px solid var(--p400);color:var(--p600);border-radius:20px;padding:7px 16px;font-size:12px;cursor:pointer;font-weight:600;}
.preview-btn:hover{background:var(--p100);}
.logout-btn{background:none;border:1px solid var(--border);color:var(--muted);border-radius:20px;padding:7px 14px;font-size:12px;cursor:pointer;}
.logout-btn:hover{background:var(--gray);}
.tabs{display:flex;padding:0 18px;border-bottom:1px solid var(--border);overflow-x:auto;gap:2px;}
.tab{padding:12px 16px;font-size:13px;border:none;background:none;cursor:pointer;color:var(--muted);border-bottom:2.5px solid transparent;margin-bottom:-1px;white-space:nowrap;}
.tab:hover{color:var(--p600);}
.tab.active{color:var(--p600);border-bottom-color:var(--p600);font-weight:700;}
.tab-body{display:none;padding:18px;}
.tab-body.active{display:block;}
.card{background:var(--white);border:1px solid var(--border);border-radius:14px;padding:18px;margin-bottom:14px;}
.card-title{font-size:12px;font-weight:700;color:var(--p800);text-transform:uppercase;letter-spacing:0.6px;margin-bottom:14px;padding-bottom:10px;border-bottom:1px solid var(--border);}
.field{margin-bottom:12px;}
.field label{display:block;font-size:11px;color:var(--muted);text-transform:uppercase;letter-spacing:0.4px;margin-bottom:5px;}
.field input,.field textarea{width:100%;padding:10px 12px;border:1px solid var(--border);border-radius:9px;font-size:13px;color:var(--text);background:var(--gray);}
.field input:focus,.field textarea:focus{outline:2px solid var(--p400);border-color:var(--p400);}
.field textarea{resize:vertical;min-height:68px;line-height:1.5;}
.banner-prev-box{width:100%;height:80px;border-radius:12px;background:linear-gradient(135deg,var(--p800),var(--p400));overflow:hidden;margin-bottom:12px;border:1px solid var(--border);}
.banner-prev-box img{width:100%;height:100%;object-fit:cover;display:none;}
.avatar-upload-row{display:flex;align-items:center;gap:14px;margin-bottom:12px;}
.avatar-prev{width:74px;height:74px;border-radius:50%;border:2px dashed var(--p400);background:var(--p50);display:flex;align-items:center;justify-content:center;overflow:hidden;font-size:26px;color:var(--p400);flex-shrink:0;}
.avatar-prev img{width:100%;height:100%;object-fit:cover;border-radius:50%;display:none;}
.up-btn{background:var(--p600);color:white;border:none;border-radius:9px;padding:9px 16px;font-size:12px;cursor:pointer;font-weight:600;display:block;margin-bottom:6px;}
.up-btn:hover{background:var(--p800);}
.up-note{font-size:11px;color:var(--muted);line-height:1.5;}
input[type=file]{display:none;}
.soc-row{display:flex;align-items:center;gap:8px;margin-bottom:10px;}
.soc-dot{width:32px;height:32px;border-radius:50%;background:var(--p600);display:flex;align-items:center;justify-content:center;flex-shrink:0;}
.soc-dot svg{width:15px;height:15px;}
.soc-name{width:96px;font-size:12px;color:var(--muted);flex-shrink:0;}
.soc-input{flex:1;padding:8px 10px;border:1px solid var(--border);border-radius:8px;font-size:12px;color:var(--text);background:var(--gray);}
.soc-input:focus{outline:2px solid var(--p400);}
.yt-row{display:flex;gap:7px;margin-bottom:10px;}
.yt-row input{flex:1;padding:10px 12px;border:1px solid var(--border);border-radius:9px;font-size:13px;color:var(--text);background:var(--gray);}
.yt-row input:focus{outline:2px solid var(--p400);}
.fetch-btn{background:var(--p600);color:white;border:none;border-radius:9px;padding:10px 16px;font-size:12px;cursor:pointer;white-space:nowrap;font-weight:600;flex-shrink:0;}
.fetch-btn:hover{background:var(--p800);}
.fetch-btn:disabled{opacity:0.45;cursor:not-allowed;}
.thumb-row{display:flex;gap:9px;align-items:center;}
.thumb-mini{width:48px;height:48px;border-radius:8px;background:var(--p100);object-fit:cover;flex-shrink:0;border:1px solid var(--border);display:none;}
.thumb-row input{flex:1;padding:10px 12px;border:1px solid var(--border);border-radius:9px;font-size:13px;color:var(--text);background:var(--gray);}
.thumb-row input:focus{outline:2px solid var(--p400);}
.link-card{background:var(--gray);border-radius:12px;padding:13px;margin-bottom:11px;border:1px solid var(--border);}
.link-card-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:10px;}
.link-card-num{font-size:11px;color:var(--muted);font-weight:700;text-transform:uppercase;letter-spacing:0.4px;}
.del-btn{background:none;border:none;color:#c0392b;font-size:22px;cursor:pointer;padding:0 4px;line-height:1;}
.del-btn:hover{color:#922b21;}
.li-yt-row{display:flex;gap:6px;margin-bottom:8px;}
.li-yt-row input{flex:1;padding:8px 10px;border:1px solid var(--border);border-radius:8px;font-size:12px;background:var(--white);color:var(--text);}
.li-yt-row input:focus{outline:2px solid var(--p400);}
.li-fetch-btn{background:var(--p600);color:white;border:none;border-radius:8px;padding:8px 12px;font-size:11px;cursor:pointer;white-space:nowrap;font-weight:600;}
.li-fetch-btn:hover{background:var(--p800);}
.li-fetch-btn:disabled{opacity:0.45;}
.link-fields{display:flex;flex-direction:column;gap:7px;}
.link-fields input{width:100%;padding:8px 10px;border:1px solid var(--border);border-radius:8px;font-size:12px;background:var(--white);color:var(--text);}
.link-fields input:focus{outline:2px solid var(--p400);}
.add-btn{width:100%;padding:11px;border:2px dashed var(--p400);border-radius:12px;background:none;color:var(--p600);font-size:13px;cursor:pointer;font-weight:600;}
.add-btn:hover{background:var(--p50);}
.save-bar{position:fixed;bottom:0;left:0;right:0;background:var(--white);border-top:1px solid var(--border);padding:13px 18px;z-index:20;}
.save-btn{width:100%;max-width:560px;margin:0 auto;display:block;padding:13px;background:var(--p600);color:white;border:none;border-radius:12px;font-size:14px;font-weight:700;cursor:pointer;}
.save-btn:hover{background:var(--p800);}
.toast{position:fixed;bottom:76px;left:50%;transform:translateX(-50%);background:var(--p800);color:white;padding:9px 22px;border-radius:22px;font-size:13px;opacity:0;transition:opacity 0.3s;pointer-events:none;z-index:999;white-space:nowrap;}
.toast.show{opacity:1;}
.prev-modal{display:none;position:fixed;inset:0;background:rgba(30,10,80,0.55);z-index:200;align-items:flex-start;justify-content:center;padding:20px;overflow-y:auto;}
.prev-modal.open{display:flex;}
.prev-frame{background:var(--white);border-radius:20px;width:100%;max-width:400px;overflow:hidden;position:relative;margin:auto;}
.prev-close{position:absolute;top:10px;right:12px;background:rgba(255,255,255,0.92);border:none;border-radius:50%;width:32px;height:32px;font-size:20px;cursor:pointer;z-index:5;color:var(--p800);}
@media(max-width:560px){.panel{max-width:100%;}.tabs{padding:0 8px;}.tab{padding:10px 10px;font-size:12px;}}
</style>
</head>
<body>

<div class="login-wrap" id="login-wrap">
  <div class="login-box">
    <div class="login-logo">✦</div>
    <h1>Admin Panel</h1>
    <p>Sign in to manage your page</p>
    <input type="password" id="pw" placeholder="Password" onkeydown="if(event.key==='Enter')doLogin()"/>
    <div class="login-err" id="login-err">Incorrect password</div>
    <button class="login-btn" onclick="doLogin()">Sign in</button>
    <a href="/" style="font-size:12px;color:var(--muted);text-decoration:none;margin-top:4px;">← View public page</a>
  </div>
</div>

<div class="panel" id="panel">
  <div class="top-bar">
    <div class="top-left">
      <div class="top-logo">✦</div>
      <div class="top-title">Admin Panel</div>
    </div>
    <div class="top-right">
      <button class="preview-btn" onclick="openPreview()">👁 Preview</button>
      <button class="logout-btn" onclick="doLogout()">Log out</button>
    </div>
  </div>
  <div class="tabs">
    <button class="tab active" onclick="switchTab('profile',this)">Profile</button>
    <button class="tab" onclick="switchTab('socials',this)">Socials</button>
    <button class="tab" onclick="switchTab('video',this)">Video</button>
    <button class="tab" onclick="switchTab('links',this)">Links</button>
    <button class="tab" onclick="switchTab('settings',this)">Settings</button>
  </div>

  <div class="tab-body active" id="tab-profile">
    <div class="card">
      <div class="card-title">Banner image</div>
      <div class="banner-prev-box" id="banner-prev-box"><img id="banner-prev-img" src="" alt=""/></div>
      <button class="up-btn" onclick="document.getElementById('banner-file').click()">📁 Upload banner</button>
      <span class="up-note">Recommended: 1200×400px JPG/PNG</span>
      <input type="file" id="banner-file" accept="image/*" onchange="handleUpload(event,'banner')"/>
      <div class="field" style="margin-top:12px;"><label>Or paste URL</label><input id="a-banner" placeholder="https://..." oninput="prevBanner()"/></div>
    </div>
    <div class="card">
      <div class="card-title">Profile photo & info</div>
      <div class="avatar-upload-row">
        <div class="avatar-prev" id="avatar-prev"><img id="avatar-prev-img" src="" alt=""/><span id="avatar-prev-ph">✦</span></div>
        <div><button class="up-btn" onclick="document.getElementById('avatar-file').click()">📁 Upload photo</button><div class="up-note">JPG or PNG — your profile picture</div></div>
      </div>
      <input type="file" id="avatar-file" accept="image/*" onchange="handleUpload(event,'avatar')"/>
      <div class="field"><label>Or paste photo URL</label><input id="a-avatar" placeholder="https://..." oninput="prevAvatar()"/></div>
      <div class="field"><label>Name</label><input id="a-name" value="Ammar Hussein"/></div>
      <div class="field"><label>Tagline</label><input id="a-sub" value=""/></div>
    </div>
  </div>

  <div class="tab-body" id="tab-socials">
    <div class="card">
      <div class="card-title">Social media links</div>
      <p style="font-size:12px;color:var(--muted);margin-bottom:16px;line-height:1.6;">Leave empty — icon hidden automatically.</p>
      <div id="socials-list"></div>
    </div>
  </div>

  <div class="tab-body" id="tab-video">
    <div class="card">
      <div class="card-title">Highlighted video</div>
      <p style="font-size:12px;color:var(--muted);margin-bottom:12px;line-height:1.6;">The YouTube API key is stored securely on the server in <code>.env</code>. Just paste the YouTube URL below and click Fetch.</p>
      <div class="yt-row">
        <input id="v-yt-url" placeholder="Paste YouTube URL to auto-fill everything ↓"/>
        <button class="fetch-btn" id="v-fetch-btn" onclick="fetchFeaturedVideo()">Fetch</button>
      </div>
      <div class="field"><label>Thumbnail URL</label>
        <div class="thumb-row"><img class="thumb-mini" id="v-thumb-mini"/><input id="v-thumb" placeholder="Auto-filled or paste manually" oninput="prevThumb('v-thumb','v-thumb-mini')"/></div>
      </div>
      <div class="field"><label>Title</label><input id="v-title" placeholder="عنوان الفيديو"/></div>
      <div class="field"><label>Description</label><textarea id="v-desc" placeholder="وصف قصير..."></textarea></div>
      <div class="field"><label>Link URL</label><input id="v-link" placeholder="https://youtube.com/watch?v=..."/></div>
    </div>
  </div>

  <div class="tab-body" id="tab-links">
    <p style="font-size:12px;color:var(--muted);margin-bottom:14px;line-height:1.6;">Each row shows as a purple button. Paste YouTube URL → click Fetch YT to auto-fill.</p>
    <div id="links-list"></div>
    <button class="add-btn" onclick="addLink()">+ Add link row</button>
    <div style="height:70px;"></div>
  </div>

  <div class="tab-body" id="tab-settings">
    <div class="card">
      <div class="card-title">Change password</div>
      <div class="field"><label>Current password</label><input type="password" id="pw-cur" placeholder="Current password"/></div>
      <div class="field"><label>New password</label><input type="password" id="pw-new" placeholder="Min 6 characters"/></div>
      <div class="field"><label>Confirm new password</label><input type="password" id="pw-cf" placeholder="Confirm"/></div>
      <button class="up-btn" onclick="changePass()">Update password</button>
      <div id="pw-msg" style="font-size:12px;margin-top:9px;"></div>
    </div>
    <div class="card">
      <div class="card-title">YouTube API Key</div>
      <p style="font-size:12px;color:var(--muted);line-height:1.8;">
        Your API key lives in <code>.env</code> on the server as:<br/>
        <code style="background:var(--gray);padding:4px 8px;border-radius:6px;display:inline-block;margin-top:6px;">YOUTUBE_API_KEY=AIza...</code><br/><br/>
        It is <strong>never exposed</strong> to the browser. All YouTube fetches go through the server.
      </p>
    </div>
  </div>

  <div class="save-bar"><button class="save-btn" onclick="saveAll()">💾 Save &amp; publish</button></div>
</div>

<div class="prev-modal" id="prev-modal">
  <div class="prev-frame" id="prev-frame">
    <button class="prev-close" onclick="closePrev()">×</button>
  </div>
</div>
<div class="toast" id="toast"></div>

<script>
const svgs={
  facebook:`<svg viewBox="0 0 24 24" fill="white" width="15" height="15"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>`,
  instagram:`<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="15" height="15"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><circle cx="12" cy="12" r="4.5"/><circle cx="17.5" cy="6.5" r="0.8" fill="white" stroke="none"/></svg>`,
  x:`<svg viewBox="0 0 24 24" fill="white" width="15" height="15"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>`,
  telegram:`<svg viewBox="0 0 24 24" fill="white" width="15" height="15"><path d="M21.198 2.433a2.242 2.242 0 0 0-1.022.215l-16.5 7a2.25 2.25 0 0 0 .4 4.298l3.924.701 2.358 6.537c.29.808 1.283 1.073 1.97.529L15.17 19.5l3.368 2.695c.654.524 1.624.269 1.94-.512l3.878-14.5a2.242 2.242 0 0 0-3.158-2.75z"/></svg>`,
  youtube:`<svg viewBox="0 0 24 24" fill="white" width="15" height="15"><path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z"/></svg>`,
  podcast:`<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" width="15" height="15"><circle cx="12" cy="11" r="3" fill="white" stroke="none"/><path d="M6.37 17.37A8 8 0 1 1 17.63 17.37"/><line x1="12" y1="21" x2="12" y2="14"/></svg>`,
  spotify:`<svg viewBox="0 0 24 24" width="15" height="15"><circle cx="12" cy="12" r="10" fill="white"/><path d="M8 13.5c2.5-1 5.5-.5 7.5 1" fill="none" stroke="#534AB7" stroke-width="1.5" stroke-linecap="round"/><path d="M7.5 10.5c3-1.2 7-.8 9.5 1.5" fill="none" stroke="#534AB7" stroke-width="1.5" stroke-linecap="round"/><path d="M7 7.5c3.5-1.5 8.5-.8 11 2" fill="none" stroke="#534AB7" stroke-width="1.5" stroke-linecap="round"/></svg>`,
  soundcloud:`<svg viewBox="0 0 24 24" fill="white" width="15" height="15"><path d="M2 15a2 2 0 0 0 2 2h14a4 4 0 0 0 0-8 4.7 4.7 0 0 0-.5 0A5 5 0 0 0 8 12a2.5 2.5 0 0 0-2.5 1A2 2 0 0 0 2 15z"/></svg>`
};
const socialDefs=[
  {id:"facebook",label:"Facebook"},{id:"instagram",label:"Instagram"},
  {id:"x",label:"X / Twitter"},{id:"telegram",label:"Telegram"},
  {id:"youtube",label:"YouTube"},{id:"podcast",label:"Podcast"},
  {id:"spotify",label:"Spotify"},{id:"soundcloud",label:"SoundCloud"}
];

let state={name:"Ammar Hussein",sub:"",avatar:"",banner:"",
  socials:{facebook:"",instagram:"",x:"",telegram:"",youtube:"",podcast:"",spotify:"",soundcloud:""},
  video:{thumb:"",title:"",desc:"",link:""},links:[]};
let avatarData="",bannerData="";
const CSRF=document.querySelector('meta[name="csrf-token"]')?.content||"";

function showToast(msg){const t=document.getElementById("toast");t.textContent=msg;t.classList.add("show");setTimeout(()=>t.classList.remove("show"),2500);}

async function doLogin(){
  const pw=document.getElementById("pw").value;
  const res=await fetch("/api/auth",{method:"POST",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":CSRF},body:JSON.stringify({password:pw})});
  const data=await res.json();
  if(data.ok){
    document.getElementById("login-wrap").style.display="none";
    document.getElementById("panel").style.display="block";
    await loadState();
    renderAdmin();
  }else{
    document.getElementById("login-err").style.display="block";
  }
}

async function doLogout(){
  await fetch("/api/logout",{method:"POST",headers:{"X-CSRF-TOKEN":CSRF}});
  document.getElementById("panel").style.display="none";
  document.getElementById("login-wrap").style.display="flex";
  document.getElementById("pw").value="";
}

async function changePass(){
  const cur=document.getElementById("pw-cur").value;
  const nw=document.getElementById("pw-new").value;
  const cf=document.getElementById("pw-cf").value;
  const msg=document.getElementById("pw-msg");
  if(nw.length<6){msg.style.color="#c0392b";msg.textContent="Min 6 characters.";return;}
  if(nw!==cf){msg.style.color="#c0392b";msg.textContent="Passwords don't match.";return;}
  const res=await fetch("/api/change-password",{method:"POST",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":CSRF},body:JSON.stringify({current:cur,password:nw})});
  const data=await res.json();
  if(data.ok){msg.style.color="#27ae60";msg.textContent="Password updated!";document.getElementById("pw-cur").value="";document.getElementById("pw-new").value="";document.getElementById("pw-cf").value="";}
  else{msg.style.color="#c0392b";msg.textContent=data.error||"Failed.";}
}

function switchTab(name,btn){
  document.querySelectorAll(".tab").forEach(t=>t.classList.remove("active"));
  document.querySelectorAll(".tab-body").forEach(t=>t.classList.remove("active"));
  btn.classList.add("active");document.getElementById("tab-"+name).classList.add("active");
}

function handleUpload(e,type){
  const file=e.target.files[0];if(!file)return;
  const reader=new FileReader();
  reader.onload=ev=>{
    const data=ev.target.result;
    if(type==="avatar"){
      avatarData=data;
      const img=document.getElementById("avatar-prev-img");img.src=data;img.style.display="block";
      document.getElementById("avatar-prev-ph").style.display="none";
      document.getElementById("a-avatar").value="";
    }else{
      bannerData=data;
      const img=document.getElementById("banner-prev-img");img.src=data;img.style.display="block";
      document.getElementById("a-banner").value="";
    }
    showToast("Uploaded ✓");
  };
  reader.readAsDataURL(file);
}
function prevAvatar(){const url=document.getElementById("a-avatar").value.trim();const img=document.getElementById("avatar-prev-img");const ph=document.getElementById("avatar-prev-ph");if(url){img.src=url;img.style.display="block";ph.style.display="none";avatarData="";}else{img.style.display="none";ph.style.display="block";}}
function prevBanner(){const url=document.getElementById("a-banner").value.trim();const img=document.getElementById("banner-prev-img");if(url){img.src=url;img.style.display="block";bannerData="";}else{img.style.display="none";}}
function prevThumb(a,b){const url=document.getElementById(a).value.trim();const img=document.getElementById(b);if(url){img.src=url;img.style.display="block";}else{img.style.display="none";}}

async function loadState(){
  try{const res=await fetch("/api/load");state=await res.json();}catch(e){}
}
function renderAdmin(){
  document.getElementById("a-name").value=state.name||"";
  document.getElementById("a-sub").value=state.sub||"";
  document.getElementById("a-avatar").value=(state.avatar||"").startsWith("data:")?"":state.avatar||"";
  document.getElementById("a-banner").value=(state.banner||"").startsWith("data:")?"":state.banner||"";
  if(state.avatar){const i=document.getElementById("avatar-prev-img");i.src=state.avatar;i.style.display="block";document.getElementById("avatar-prev-ph").style.display="none";}
  if(state.banner){const i=document.getElementById("banner-prev-img");i.src=state.banner;i.style.display="block";}
  document.getElementById("v-thumb").value=state.video?.thumb||"";
  document.getElementById("v-title").value=state.video?.title||"";
  document.getElementById("v-desc").value=state.video?.desc||"";
  document.getElementById("v-link").value=state.video?.link||"";
  if(state.video?.thumb){const m=document.getElementById("v-thumb-mini");m.src=state.video.thumb;m.style.display="block";}
  renderSocials();renderLinksAdmin();
}
function renderSocials(){
  const el=document.getElementById("socials-list");el.innerHTML="";
  socialDefs.forEach(s=>{
    const row=document.createElement("div");row.className="soc-row";
    row.innerHTML=`<div class="soc-dot">${svgs[s.id]||""}</div><div class="soc-name">${s.label}</div><input class="soc-input" id="s-${s.id}" placeholder="https://..." value="${state.socials?.[s.id]||""}"/>`;
    el.appendChild(row);
  });
}
function renderLinksAdmin(){
  const el=document.getElementById("links-list");el.innerHTML="";
  (state.links||[]).forEach((l,i)=>{
    const div=document.createElement("div");div.className="link-card link-entry";
    div.innerHTML=`<div class="link-card-head"><span class="link-card-num">Row ${i+1}</span><button class="del-btn" onclick="removeLink(${i})">×</button></div><div class="li-yt-row"><input class="li-yt" placeholder="YouTube URL → auto-fill" value="${l.url||""}"/><button class="li-fetch-btn" onclick="fetchLinkRow(${i})">Fetch YT</button></div><div class="link-fields"><input class="li-label" placeholder="Label (Arabic ok)" value="${l.label||""}"/><input class="li-url" placeholder="Link URL" value="${l.url||""}"/><input class="li-thumb" placeholder="Thumbnail URL" value="${l.thumb||""}"/></div>`;
    el.appendChild(div);
  });
}
function collectState(){
  state.name=document.getElementById("a-name").value;
  state.sub=document.getElementById("a-sub").value;
  state.avatar=avatarData||document.getElementById("a-avatar").value;
  state.banner=bannerData||document.getElementById("a-banner").value;
  if(!state.socials)state.socials={};
  socialDefs.forEach(s=>{state.socials[s.id]=document.getElementById("s-"+s.id)?.value.trim()||"";});
  state.video={thumb:document.getElementById("v-thumb").value,title:document.getElementById("v-title").value,desc:document.getElementById("v-desc").value,link:document.getElementById("v-link").value};
  const entries=document.querySelectorAll(".link-entry");
  state.links=Array.from(entries).map(el=>({thumb:el.querySelector(".li-thumb").value,label:el.querySelector(".li-label").value,url:el.querySelector(".li-url").value}));
}
async function saveAll(){
  collectState();
  const res=await fetch("/api/save",{method:"POST",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":CSRF},body:JSON.stringify(state)});
  const data=await res.json();
  if(data.ok){showToast("Saved & published ✓");}else{showToast("Error saving: "+( data.error||"unknown"));}
}
function addLink(){collectState();state.links.push({thumb:"",label:"",url:""});renderLinksAdmin();}
function removeLink(i){collectState();state.links.splice(i,1);renderLinksAdmin();}

function extractVideoId(url){const m=url.match(/(?:v=|youtu\.be\/|embed\/|shorts\/)([A-Za-z0-9_-]{11})/);return m?m[1]:null;}
async function fetchFeaturedVideo(){
  const url=document.getElementById("v-yt-url").value.trim();
  const id=extractVideoId(url);if(!id){showToast("Invalid YouTube URL");return;}
  const btn=document.getElementById("v-fetch-btn");btn.disabled=true;btn.textContent="...";
  const res=await fetch(`/api/youtube?id=${id}`);
  btn.disabled=false;btn.textContent="Fetch";
  if(!res.ok){showToast("Fetch failed");return;}
  const d=await res.json();
  document.getElementById("v-thumb").value=d.thumb;document.getElementById("v-title").value=d.title;
  document.getElementById("v-desc").value=d.desc;document.getElementById("v-link").value=d.url;
  const m=document.getElementById("v-thumb-mini");m.src=d.thumb;m.style.display="block";
  showToast("Fetched ✓");
}
async function fetchLinkRow(i){
  collectState();
  const entries=document.querySelectorAll(".link-entry");const el=entries[i];
  const ytUrl=el.querySelector(".li-yt").value.trim();
  const id=extractVideoId(ytUrl);if(!id){showToast("Invalid YouTube URL");return;}
  const btn=el.querySelector(".li-fetch-btn");btn.disabled=true;btn.textContent="...";
  const res=await fetch(`/api/youtube?id=${id}`);
  btn.disabled=false;btn.textContent="Fetch YT";
  if(!res.ok){showToast("Fetch failed");return;}
  const d=await res.json();
  el.querySelector(".li-label").value=d.title;el.querySelector(".li-url").value=d.url;el.querySelector(".li-thumb").value=d.thumb;
  showToast("Fetched ✓");
}

function openPreview(){
  collectState();const s=state;
  const svgsFull={facebook:`<svg viewBox="0 0 24 24" fill="white" width="20" height="20"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>`,instagram:`<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="20" height="20"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><circle cx="12" cy="12" r="4.5"/><circle cx="17.5" cy="6.5" r="0.8" fill="white" stroke="none"/></svg>`,x:`<svg viewBox="0 0 24 24" fill="white" width="20" height="20"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>`,telegram:`<svg viewBox="0 0 24 24" fill="white" width="20" height="20"><path d="M21.198 2.433a2.242 2.242 0 0 0-1.022.215l-16.5 7a2.25 2.25 0 0 0 .4 4.298l3.924.701 2.358 6.537c.29.808 1.283 1.073 1.97.529L15.17 19.5l3.368 2.695c.654.524 1.624.269 1.94-.512l3.878-14.5a2.242 2.242 0 0 0-3.158-2.75z"/></svg>`,youtube:`<svg viewBox="0 0 24 24" fill="white" width="20" height="20"><path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z"/></svg>`,podcast:`<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" width="20" height="20"><circle cx="12" cy="11" r="3" fill="white" stroke="none"/><path d="M6.37 17.37A8 8 0 1 1 17.63 17.37"/><line x1="12" y1="21" x2="12" y2="14"/></svg>`,spotify:`<svg viewBox="0 0 24 24" width="20" height="20"><circle cx="12" cy="12" r="10" fill="white"/><path d="M8 13.5c2.5-1 5.5-.5 7.5 1" fill="none" stroke="#534AB7" stroke-width="1.5" stroke-linecap="round"/><path d="M7.5 10.5c3-1.2 7-.8 9.5 1.5" fill="none" stroke="#534AB7" stroke-width="1.5" stroke-linecap="round"/><path d="M7 7.5c3.5-1.5 8.5-.8 11 2" fill="none" stroke="#534AB7" stroke-width="1.5" stroke-linecap="round"/></svg>`,soundcloud:`<svg viewBox="0 0 24 24" fill="white" width="20" height="20"><path d="M2 15a2 2 0 0 0 2 2h14a4 4 0 0 0 0-8 4.7 4.7 0 0 0-.5 0A5 5 0 0 0 8 12a2.5 2.5 0 0 0-2.5 1A2 2 0 0 0 2 15z"/></svg>`};
  const socHtml=socialDefs.filter(sd=>s.socials?.[sd.id]).map(sd=>`<a href="${s.socials[sd.id]}" target="_blank" style="width:40px;height:40px;border-radius:50%;background:#534AB7;display:flex;align-items:center;justify-content:center;text-decoration:none;flex-shrink:0;">${svgsFull[sd.id]}</a>`).join("");
  const linksHtml=(s.links||[]).filter(l=>l.label||l.url).map(l=>`<a href="${l.url||'#'}" target="_blank" style="display:flex;align-items:center;gap:10px;background:#534AB7;border-radius:12px;padding:9px 12px;text-decoration:none;"><div style="width:42px;height:42px;border-radius:8px;background:#7F77DD;flex-shrink:0;overflow:hidden;display:flex;align-items:center;justify-content:center;">${l.thumb?`<img src="${l.thumb}" style="width:100%;height:100%;object-fit:cover;"/>`:`<svg viewBox="0 0 24 24" width="20" height="20"><path d="M19 4H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z" fill="white" opacity="0.5"/></svg>`}</div><div style="flex:1;font-size:13px;color:white;direction:rtl;text-align:right;font-weight:500;line-height:1.4;">${l.label}</div><span style="color:white;opacity:0.7;font-size:18px;">›</span></a>`).join("");
  const vl=s.video?.link||"#";
  const vidHtml=(s.video?.title||s.video?.thumb)?`<div style="margin:0 14px 14px;border:2.5px solid #7F77DD;border-radius:16px;overflow:hidden;background:#EEEDFE;cursor:pointer;" onclick="window.open('${vl}','_blank')">${s.video.thumb?`<img src="${s.video.thumb}" style="width:100%;aspect-ratio:16/9;object-fit:cover;display:block;"/>`:`<div style="width:100%;aspect-ratio:16/9;background:#AFA9EC;display:flex;align-items:center;justify-content:center;"><svg viewBox="0 0 24 24" width="44" height="44"><path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z" fill="#534AB7"/></svg></div>`}<div style="padding:10px 14px 12px;"><div style="font-size:14px;font-weight:600;color:#26215C;direction:rtl;">${s.video.title}</div>${s.video.desc?`<div style="font-size:12px;color:#534AB7;margin-top:4px;direction:rtl;">${s.video.desc}</div>`:""}</div></div>`:"";
  const banStyle=s.banner?`background:url('${s.banner}') center/cover no-repeat`:`background:linear-gradient(135deg,#3C3489,#7F77DD)`;
  const avHtml=s.avatar?`<img src="${s.avatar}" style="width:100%;height:100%;object-fit:cover;border-radius:50%;"/>`:"✦";
  document.getElementById("prev-frame").innerHTML=`<button class="prev-close" onclick="closePrev()">×</button><div style="${banStyle};height:130px;"></div><div style="display:flex;flex-direction:column;align-items:center;margin-top:-44px;position:relative;z-index:2;padding:0 16px 12px;"><div style="width:88px;height:88px;border-radius:50%;border:4px solid white;background:#CECBF6;display:flex;align-items:center;justify-content:center;font-size:28px;color:#534AB7;overflow:hidden;">${avHtml}</div><div style="font-size:19px;font-weight:700;color:#26215C;margin-top:10px;text-align:center;">${s.name}</div><div style="font-size:13px;color:#534AB7;margin-top:3px;">${s.sub}</div></div><div style="display:flex;gap:12px;justify-content:center;padding:8px 16px 18px;flex-wrap:wrap;">${socHtml}</div>${vidHtml}<div style="padding:0 14px;display:flex;flex-direction:column;gap:9px;padding-bottom:28px;">${linksHtml}</div>`;
  document.getElementById("prev-modal").classList.add("open");
}
function closePrev(){document.getElementById("prev-modal").classList.remove("open");}
</script>
</body>
</html>
