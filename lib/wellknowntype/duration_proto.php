<?hh // strict
namespace google\protobuf;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: duration.proto

class Duration implements \Protobuf\Message {
  public int $seconds;
  public int $nanos;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'seconds' => int,
    ?'nanos' => int,
  ) $s = shape()) {
    $this->seconds = $s['seconds'] ?? 0;
    $this->nanos = $s['nanos'] ?? 0;
    $this->XXX_unrecognized = '';
  }

  public function MessageName(): string {
    return "google.protobuf.Duration";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->seconds = $d->readVarint();
          break;
        case 2:
          $this->nanos = $d->readVarint32Signed();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->seconds !== 0) {
      $e->writeTag(1, 0);
      $e->writeVarint($this->seconds);
    }
    if ($this->nanos !== 0) {
      $e->writeTag(2, 0);
      $e->writeVarint($this->nanos);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->setCustomEncoding(\Protobuf\Internal\JsonEncoder::encodeDuration($this->seconds, $this->nanos));
  }

  public function MergeJsonFrom(mixed $m): void {
    $parts = \Protobuf\Internal\JsonDecoder::readDuration($m);
    $this->seconds = $parts[0];
    $this->nanos = $parts[1];
  }

  public function CopyFrom(\Protobuf\Message $o): \Result\Error {
    if (!($o is Duration)) {
      return \Result\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->seconds = $o->seconds;
    $this->nanos = $o->nanos;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Result\Ok();
  }
}


class XXX_FileDescriptor_duration__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'duration.proto';
  const string RAW =
  'eNri4kspLUosyczP0ysoyi/JF+JPz89Pz0mF8JJK05SsuDhcoEqEJLjYi1OT8/NSiiUYFR'
  .'g1mINgXCERLta8xLz8YgkmBUYN1iAIx6mGSzg5P1cPzUgnXpiBASCRAMYorfTMkozSJL3k'
  .'/Fz99PycxLx0fZhi/YKSyoLUYn2YM38wMi5iYnYPcFrFJOcOMTcAqlQvPDUnxzsvvzwvBK'
  .'QliQ1shjEgAAD///eYTTA';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
