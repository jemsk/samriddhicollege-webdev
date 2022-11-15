
### Create a new repository on the command line
```
> git init
> git touch README.md
> git add README.md
> git commit -m "first commit"
> git branch -M master
> git remote add origin https://github.com/jemsk/samriddhicollege-webdev.git
> git push -u origin master
```

### Push an existing repository from the command line
```
> git remote add origin https://github.com/jemsk/samriddhicollege-webdev.git
> git branch -M master
> git push -u origin master
```

### Initial Configuration
*Configuring user information used across all local repositories*

1. set a name that is identifiable for credit when review version history

	```
	git config --global user.name “[firstname lastname]”
	```
2. set an email address that will be associated with each history marker
	```
	git config --global user.email “[valid-email]”
	```

## Videos 
[5 Minute Overview of Git - YouTube](https://www.youtube.com/watch?v=xvwBtODV0ms)