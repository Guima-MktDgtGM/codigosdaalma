@echo off
title Servidor Local - Teste Numerologico
chcp 65001 > nul
cls
echo =======================================================
echo   Iniciando o site Teste Numerológico localmente...
echo =======================================================
echo.
node "%~dp0server.js"
pause
