cd %~dp0
rem 管理员身份运行
sc create notify binPath= "D:\code\heartbeat\notify.cmd"
