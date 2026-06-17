source 'https://rubygems.org'

# Jekyll 4 + Ruby 3.x (webrick required for `jekyll serve` on Ruby 3+)
gem 'jekyll', '~> 4.3'
gem 'webrick', '~> 1.8'

# Kramdown 2 needs an explicit parser for GitHub-Flavored Markdown
gem 'kramdown-parser-gfm'

# Older sass-embedded fails to compile on Ruby 3.3+ (URI / rake native ext)
gem 'sass-embedded', '~> 1.81'

# 3.1+ forwards _config.yml sass.silence_deprecations to Dart Sass (3.0.0 ignored it)
gem 'jekyll-sass-converter', '~> 3.1'

group :jekyll_plugins do
  gem 'jekyll-paginate'
  gem 'jekyll-sitemap'
end
