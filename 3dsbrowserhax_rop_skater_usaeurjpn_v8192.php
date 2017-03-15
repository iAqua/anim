<?php

$CODEBLK_ENDADR = ((0x00100000 + 0x00277000 + 0x00061000 + 0x00009EF8 + 0x00045928) + 0xfff) & ~0xfff;
$OSSCRO_HEAPADR = 0x08133000;
$WEBKITCRO_HEAPADR = 0x08411000;
$PEERCRO_HEAPADR = 0x0831d000;
$APPHEAP_PHYSADDR = 0x2b000000;
init_mapaddrs_cro();

$STACKPIVOT_ADR = 0x0027b12c;
$COND_THROWFATALERR = 0x00262760;

$ROP_POP_R0R6PC = 0x001df7f0;
$ROP_POP_R0R8PC = 0x0030c318;
$ROP_POP_R0PC = 0x00296e58;
$ROP_POP_R1R5PC = 0x001dcdd0;

$ROP_STR_R1TOR0 = 0x00226c04;
$ROP_LDR_R0FROMR0 = 0x001f7a04;
$ROP_ADDR0_TO_R1 = 0x0027b9dc;

$ROP_WRITETHREADSTORAGEPTR_TOR4R5 = 0x002974fc;

$srv_GetServiceHandle = 0x001eaafc;

$svcGetProcessId = 0x0026bc20;
$svcSendSyncRequest = 0x001eb138;
$svcControlMemory = 0x002634d0;
$svcSleepThread = 0x002d8cc4;

$GXLOW_CMD4 = 0x002a248c;
$GSPGPU_SERVHANDLEADR = 0x003e03d0;

$FS_MOUNTSDMC = 0x00318d20;

$IFile_Open = 0x003222d4;
$IFile_GetSize = 0x001f1fdc;
$IFile_Seek = 0x0032d93c;
$IFile_Read = 0x0030c43c;

$FS_DELETEFILE = 0x00325b04;

$FSFILEIPC_CLOSE = 0x00267d7c;
$FSFILEIPC_READ = 0x00267d24;
$FSFILEIPC_GETSIZE = 0x00334928;

$POPPC = 0x001df60c;

$ROP_STR_R0TOR1 = $WEBKITCRO_MAPADR+0x0042452c;

$WKC_FOPEN = $OSSCRO_MAPADR+0xe4ca4-0x4;
$WKC_FCLOSE = $OSSCRO_MAPADR+0xe4c94-0x4;
$WKC_FREAD = $OSSCRO_MAPADR+0xe4c9c-0x4;
$WKC_FWRITE = $OSSCRO_MAPADR+0xe4cac-0x4;
$WKC_FSEEK = $PEERCRO_MAPADR+0x2dfb9;

$ROP_curl_easy_cleanup = $WEBKITCRO_MAPADR+0x4dd600-0x4;
$ROP_curl_easy_init = $WEBKITCRO_MAPADR+0x4dd160-0x4;
$ROP_curl_easy_perform = $WEBKITCRO_MAPADR+0x4dd770-0x4;
$ROP_curl_easy_setopt = $WEBKITCRO_MAPADR+0x4dd168-0x4;

$ROP_MEMCPY = $WEBKITCRO_MAPADR+0x4dca08-0x4;
$ROP_MEMSETOTHER = $WEBKITCRO_MAPADR+0x4dc9e8-0x4;

$ROP_snprintf = $OSSCRO_MAPADR+0xe4a9c-0x4;

$GSP_FLUSHDCACHE = 0x0029dad0;
$GSP_WRITEHWREGS = 0x002982f8;

$IFile_Close = 0x001ec780;
$IFile_Write = 0x00327248;

$THROW_FATALERR = 0x001f1fac;

$ROP_LDMSTM_R5R4_R0R3 = 0x001e8b28;

$ROP_POP_R0IPPC = $WEBKITCRO_MAPADR+0x001b2bb4;

$ROP_LDR_R0_FROMR0_SHIFTR1 = $OSSCRO_MAPADR+0x001090dc;

$ROP_STMR0_R0PC = $PEERCRO_MAPADR+0x0002d6cd;

?>