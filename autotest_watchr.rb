watch("app/(.*).php") do |match|
	run_test %{test/#{match[1]}Test.php}
end

watch("test/.*Test.php") do |match|
	run_test match[0]
end

def run_test(file)
	unless File.exist?(file)
		puts "#{file} does not exist"
		return
	end
	puts "Running file #{file}"
	result = `vendor/bin/phpunit #{file}`
	# clear_console
	puts result
end

def clear_console
	puts "\e[H\e[2J" #clear console
end