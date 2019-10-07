
# 下載來源資料


## 下載

從 「[教育部國語辭典公眾授權網](https://language.moe.gov.tw/001/Upload/Files/site_content/M0001/respub/index.html) / [《國語辭典簡編本》資料下載](https://language.moe.gov.tw/001/Upload/Files/site_content/M0001/respub/dict_concised_download.html)」這個頁面，

可以找到「[dict_concised_2014_20190411.zip](https://language.moe.gov.tw/001/Upload/Files/site_content/M0001/respub/download/dict_concised_2014_20190411.zip)」的連結。

執行下面指令，下載「[dict_concised_2014_20190411.zip](https://language.moe.gov.tw/001/Upload/Files/site_content/M0001/respub/download/dict_concised_2014_20190411.zip)」。

``` sh
$ wget -c 'https://language.moe.gov.tw/001/Upload/Files/site_content/M0001/respub/download/dict_concised_2014_20190411.zip'
```

## 解開

執行下面指令，解開「[dict_concised_2014_20190411.zip](https://language.moe.gov.tw/001/Upload/Files/site_content/M0001/respub/download/dict_concised_2014_20190411.zip)」。


``` sh
$ unzip -O Big5 'dict_concised_2014_20190411.zip'
```

會得到一個檔案「dict_concised_2014_20190411.xls」。

> 要使用「[unzip](http://manpages.ubuntu.com/manpages/bionic/en/man1/unzip.1.html)」這個指令，必須先安裝「[unzip](https://packages.ubuntu.com/bionic/unzip)」這個「Package」，請參考「[如何安裝unzip](package-unzip.md)」。


## 腳本範例

* [demo/about-download-and-extract](https://github.com/samwhelp/note-php-office-for-read-dict-db/tree/gh-pages/main/demo/about-download-and-extract)
* demo-php-office-for-read-dict-db/bin/[asset-dict-concised.sh](https://github.com/samwhelp/demo-php-office-for-read-dict-db/blob/master/bin/asset-dict-concised.sh)
