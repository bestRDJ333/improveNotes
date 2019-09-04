# 什麼是 Git

- 版本控制系統 (VCS)

- 分散式的版控系統 (Distributed Version Control)

- 快速且有效率

- 支援並且鼓勵分支的開發環境

  --------

  # 終端機常用指令

  ### 對照表

  | Windows | Linux | 說明               |
  | ------- | ----- | ------------------ |
  | cd      | cd    | 切換目錄           |
  | cd      | pwd   | 取得目前目錄位置   |
  | dir     | ls    | 目前位置的檔案列表 |
  | mkdir   | mkdir | 建立新的目錄       |
  | -       | touch | 建立檔案           |
  | copy    | cp    | 複製檔案           |
  | move    | mv    | 移動檔案           |
  | del     | rm    | 刪除檔案           |
  | cls     | clear | 清除畫面上的內容   |

  ### Linux 常用指令

  ```sh
  # 檔案列表
  ls -l
  
  # 檔案列表，包含隱藏檔
  ls -l
  
  # 建立檔案
  touch a.txt
  
  # 刪除檔案
  rm a.txt
  
  # 切換目錄位置至上一層
  cd ..
  
  # 切換目錄位置至 folder_name
  cd folder_name
  ```

  ### 建議 Vim 操作說明

  | 指令 | 說明         |
  | ---- | ------------ |
  | :w   | 存擋         |
  | :q   | 離開         |
  | :wq  | 存擋然後離開 |

  | insert 模式 | 說明     |
  | ----------- | -------- |
  | i           | insert   |
  | a           | append   |
  | o           | new line |

  ESC：退出 insert 模式