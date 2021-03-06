# Get twilio-ruby from twilio.com/docs/ruby/install
require 'twilio-ruby'

# Get your Account SID and Auth Token from twilio.com/console
account_sid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
auth_token = 'your_auth_token'

client = Twilio::REST::Client.new(account_sid, auth_token)

command = client.preview.wireless.commands.create(
  command: "wakeup",
  sim: "AliceSmithSmartMeter",
  callback_url: "https://sim-manager.mycompany.com/commands/mobile-terminated-command-callback"
)

puts command
