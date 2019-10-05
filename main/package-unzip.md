
# Package - unzip

## 如何安裝 unzip

執行下面指令，安裝「[unzip](https://packages.ubuntu.com/bionic/unzip)」這個「Package」。

``` sh
$ sudo apt-get install unzip
```

## 確認是否安裝成功

執行下面指令

``` sh
$ dpkg -l unzip
```

顯示

```
Desired=Unknown/Install/Remove/Purge/Hold
| Status=Not/Inst/Conf-files/Unpacked/halF-conf/Half-inst/trig-aWait/Trig-pend
|/ Err?=(none)/Reinst-required (Status,Err: uppercase=bad)
||/ Name                            Version              Architecture         Description
+++-===============================-====================-====================-====================================================================
ii  unzip                           6.0-21ubuntu1        amd64                De-archiver for .zip files
```

## 使用案例

* [下載來源資料](howto-download-and-extract.md)
