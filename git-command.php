<?php
/**
 ** git            : verisoning control system pada sebuah aplikasi.
 ** git file       : proses atau keadaan file pada waktu itu.
 ** git remote     : remote repository lokal ke repository online
 *?                  git push : proses mengirim repository ke repo online
 *?                  git fetch: proses mengambil repository ke repo lokal, mengambil revisi terakhir tnpa melakukan merge ke repo lokal // berguna jika ada perubahan trkhir dari branch master tapi dilokal kita blm update perubahan terkahir, dan kita sudah mlkukan perubahan di repo online, tp blm push ke repo lokal. repo lokal kita tdak akan hilang perubahanya tapi update dgn perubahan terkahir dari master
 *?                  git pull : proses mengambil repository ke repo lokal, mengambil revisi terkhir dan langsung melakukan penggabungan (merge) terhadap repository lokal.
 *?                  git clone: proses mengambil repository ke repo lokal, tanpa mengambil revisi terkahir dari repository lokal // artinya repo lokal kita masih kosong dari perubahan (tidak ada file .git)
 ** git percabangan: fitur untuk membuat branch baru, agar mencegah konfilik pada saat commit bersama team.
 ** git previous   : fitur untuk melihat/merubah/menambahkan perubahan file pada waktu tertentu
 *?                  git reset   : mengembalikan file ke kondisi sebelumnya, kemudian menghapus catatan sejarah commit beikutnya.
 *?                  git revert  : mengembalikan file ke kondisi sebelumnya, dengan tidak menghapus catatan sejarah commit beikutnya.
 **  
 */

 //@ GIT FILE
 //? MODIFIED: merubah struktural source data
 //? STAGED  : menambahakan perubahan soruce data ke dalam repo local (.git)
 //? COMMIT  : memberikan nama/keterangan dalam suatu perubahan
 //? PUSH    : upload file/perubahan file ke repo online

//@ GIT REMOTE  
//! git init                                                         : initialize folder/soruce untuk versioning
//! git add *                                                        : menambahakan smua file / git add [nama_file]
//! git commit                                                       : menbmahakan nama/keterangan pada perubahan
//! git remote add origin https                                      : //github.com/ogisetiawan/git-note.git : menambahakan remote repository github
//! git push -u origin master                                        : push soruce data ke github

//@ GIT PERCABANGAN  
//! git branch [nama_branch_baru]                                    : membuat percabangan baru
//! git branch                                                       : melihat isi branch pda repo
//! git checkout                                                     : pindah ke cabang baru utuk commit/prubahan baru
//! git merge [nama_branch]                                          : menggabungkan branch master dgn branch lain

//@ GIT PREVIOUS
//! git checkout [nomor_commit]                                      : melihat file dimasa lalu sesuai nomor commit
//! git reset --soft [nomor_commit]                                  : mengembalikan kondisi file dalam keadaan staged
//! git reset --mixed [nomor_commit]                                 : mengembalikan kondisi file dalam keadaan modified
//! git reset --hard [nomor_commit]                                  : mengembalikan kondisi file dalam keadaan commit

// @ OTHER 
//! git log                                                          : melihat log pada git /git log --oneline
//! git clone                                                        : membuat clone data soruce git repo, melanjutkan/menambahkan perubahan pada app terkahir
//! git clone --no-checkout <repo_url>                               : clone file .git pada commit terakhir 
