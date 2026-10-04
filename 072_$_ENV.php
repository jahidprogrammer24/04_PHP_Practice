<?php
//PHP $_ENV
/*
$_ENV is a superglobal variable in PHP. It is an associative array that stores all the environment variables in the current script. 
These environment variables are imported into the global namespacee. Most of these variables are provided by the shell under which the PHP perser is running. Hence, the list of environment variables may be diffrent platforms.
This array ($_ENV) also includes CGI variables in case PHP is running as a server module or a CGI processor.

List of Environment Variables:
Variable

01. ALLUSERSPROFILE // C:\ProgramData

02. APPDATA // C:\Users\User\AppData\Roaming

03. CommonProgramFiles// c:\Program Files\Common Files

04. CommonProgramFiles(x86) //C:\Program Files (x86)\Common Files

05. CommonProgramW6432 // C:\Program Files\Common Files

06. COMPUTERNAME // GNVBGL3

07. ComSpec // c:\WINDOWS\system32\cmd.exe

08. DriverData // c:\Windows\System32\Drivers\DriverData

09. HOMEDRIVE // c-

10. HOMEPATH // \User\user

11. LOCALAPPDATA // c:\Users\user\AppData\Local

12. LOGONSERVER// \\GNVDBL3

13. MOZ_PLUGIN_PATH // C:\Program Files (x86)\ Foxit Software\ Foxit PDF Reader\plugins\

14. NUMBER_OF_PROCESSORS // 8

15. OneDrive // C:\Users\user\OneDrive

16. OneDriveConsumer // C:\Users\user\OneDrive

17. OS // Windows_NT

18. Path // C:\Python311\Scripts\;
C:\Python311\;
C:\WINDOWS\system32;
C:\WINDOWS;
C:\WINDOWS\System32\Wbem;
C:\WINDOWS\System32\WindowsPowerShell\ v1.0\;
C:\WINDOWS\System32\OpenSSH\;
C:\xampp\php;
C:\Users\user\AppData\Local\Microsoft\ WindowsApps;
C:\VSCode\Microsoft VS Code\bin

19. PATHEXT //.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE; .WSF;.WSH;.MSC;.PY;.PYW

20. PROCESSOR_ARCHITECTURE //    
AMD64

21. PROCESSOR_IDENTIFIER //     
Intel64 Family 6 Model 140 Stepping 1, GenuineIntel

22. PROCESSOR_LEVEL // 6

23. PROCESSOR_REVISION // 8c01

24. ProgramData // C:\ProgramData

25. ProgramFiles //     
C:\Program Files

26. ProgramFiles(x86) //    
C:\Program Files (x86)

27. ProgramW6432 //C:\Program Files

28. PSModulePath //   
C:\Program Files\WindowsPowerShell\Modules;
C:\WINDOWS\system32\WindowsPowerShell\v1.0\ Modules

29. PUBLIC // C:\Users\Public

30. SystemDrive // C âˆ’

31. SystemRoot // C:\WINDOWS

32. TEMP // C:\Users\user\AppData\Local\Temp

33. TMP // C:\Users\user\AppData\Local\Temp

34. USERDOMAIN // GNVBGL3

35. USERDOMAIN_ROAMINGPROFILE // GNVBGL3

36. USERNAME // user

37. USERPROFILE // 

38. windir // C:\WINDOWS

39. ZES_ENABLE_SYSMAN // 1

40. __COMPAT_LAYER // RunAsAdmin Installer

41. AP_PARENT_PID // 10608

*/
echo "Path: " . $_ENV['Path'];

putenv("PHP_TEMPUSER=GUEST");
echo "Temp user:" . getenv("PHP_TEMPUSER");
