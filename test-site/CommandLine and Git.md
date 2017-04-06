# Command Line
**pwd** outputs the name of the current working directory.

 **ls** lists all files and directories in the working directory.

     ls -a lists all contents of a directory, including hidden files and directories
     ls -l lists all contents in long format
     ls -t orders files and directories by the time they were last modified
     Multiple options can be used together, like ls -alt

 **cd** switches you into the directory you specify.

 **mkdir** creates a new directory in the working directory.

 **cp** copies files

 **mv** moves and renames files

 **rm** removes files

 **rm -r** removes directories

 ## Redirection

 The common redirection commands are:

       > redirects standard output of a command to a file, overwriting previous content.
       >> redirects standard output of a command to a file, appending new content to old content.
       < redirects standard input to a command.
       | redirects standard output of a command to another command.

 A number of other commands are powerful when combined with redirection commands:

 **sort** : sorts lines of text alphabetically.

 **uniq** : filters duplicate, adjacent lines of text.

 **grep** : searches for a text pattern and outputs it.

     grep -i enables the command to be case insensitive.
     grep -R searches all files in a directory and outputs filenames and lines containing matched results.
     grep -Rl searches all files in a directory and outputs only filenames with matched results.
 **sed** : searches for a text pattern, modifies it, and outputs it.
 Example: sed 's/snow/rain/g' forests.txt

 **cat filename** show content of file

## Nano
 The environment refers to the preferences and settings of the current user.

 The nano editor is a command line text editor used to configure the environment.

 ~/.bash_profile is where environment settings are stored. You can edit this file with nano.

 Environment variables are variables that can be used across commands and programs and hold information about the environment.

 **export VARIABLE="Value" ** sets and exports an environment variable.

 **USER** is the name of the current user.

 **PS1** is the command prompt.

 **HOME** is the home directory. It is usually not customized.

 **PATH** returns a colon separated list of file paths. It is customized in advanced cases.

 **env** returns a list of environment variables.

## Git
**git init** creates a new Git repository

**git status** inspects the contents of the working directory and staging area

**git add filename** adds files from the working directory to the staging area

**git diff** shows the difference between the working directory and the staging area

**git commit** permanently stores file changes from the staging area in the repository (git commit -m "message")

**git log** shows a list of all previous commits

**git checkout HEAD filename** : Discards changes in the working directory.

**git reset HEAD filename**: Unstages file changes in the staging area.

**git reset SHA**: Can be used to reset to a previous commit in your commit history.

Additionally, you learned a way to add multiple files to the staging area with a single command: **git add filename_1 filename_2**

**git branch** : Lists all a Git project's branches.

**git branch branch_name** : Creates a new branch.

**git checkout branch_name**: Used to switch from one branch to another.

**git merge branch_name**: Used to join file changes from one branch to another.

**git branch -d branch_name**: Deletes the branch specified.

**git clone** : Creates a local copy of a remote.

**git remote -v** : Lists a Git project's remotes.

**git fetch** : Fetches work from the remote into the local copy.

**git merge origin/master** : Merges origin/master into your local branch.

**git push origin <branch_name>** : Pushes a local branch to the origin remote.
