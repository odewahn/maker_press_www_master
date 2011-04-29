#!/usr/bin/perl
use strict;
use Dumpvalue;
my $d = Dumpvalue->new();

print 'Content-Type: text',"\n\n";

system("mv /var/www/html/content/uploads/* /home/gollum/git_repo/attachments/");
system("git add attachments/*");
system("git commit -a -m'Committing images'");

print 'Done',"\n";
$d->dumpValue(\%ENV);

