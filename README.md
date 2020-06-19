# Microportfolio

My microportfolio website.

#### Update Instructions
```sh
# Build for production after making changes.
npm run prod

# Use `git subtree` to create a branch with only the changes for the production build
git subtree split --prefix build_production/ -b prod

# Checkout the new branch and force push the changes to live for auto deploy
git checkout prod
git push -f live prod:master
```

#### Helpful links
* [Deploying to git VPS](https://www.digitalocean.com/community/tutorials/how-to-set-up-automatic-deployment-with-git-with-a-vps)
* [Git subtree gist](https://gist.github.com/tduarte/eac064b4778711b116bb827f8c9bef7b)
